<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;

use App\User;

use KPAPostMail;

class SDKController extends Controller
{
    //
    public function shortener_url($token, Request $request) {
      $user = User::where('token', $token)->first();
      if($user == null) {
        return [
          "Status" => 404,
          "Message" => "Invalid access token."
        ];
      }

      $shortener_url = new ShortUrlController();

      $result = $shortener_url->generate_hexcode($user->id, $request);

      return $result;
    }

    public function kpa_jssdk(Request $request) {

      $code = IsSet($request["code"]) ? $request["code"] : "NoKPAToken";

      $js = "var meta = document.createElement('meta'); meta.name = 'kpa_csrf'; meta.content = '{$code}'; document.getElementsByTagName('head')[0].appendChild(meta);";

      return $js;
    }

    public function generata_kpa_token() {
      $hex_code = sprintf('%06X', mt_rand(0, 0xFFFFFF));
      $date     = Date('Ymdhis');
      $key      = "@KPA12@kpa@kayra";
      return [
        "token" => md5($key . $hex_code . $date),
        "date" => Date($date)
      ];
    }

    public function testing() {
       $send_to = array(
         "Name" => "King Paulo Aquino",
         "Email" => "me@kpa21.info"
       );
       $subject = "Sample Email From KPAPostMail | ". rand(1000, 9999);
       $message = "Hello, This is a test email from KPAPostMail";
       return KPAPostMail::Send($send_to, $subject, $message);
    }
}
