<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// database
use App\Url;
use App\Counter;
use DB;

// seo
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

//classes
use KPAHelper;


class ShortUrlController extends Controller
{
    //
    public static $app_;

    public function __construct() {
       $this::$app_ = KPAHelper::getConfigApp();
    }


    public function init($hex_code = null) {
       SEO::setTitle($this::$app_["name"]);
       SEO::setDescription('ShortUrl by kpa.ph is used to create short URLs that can be easily shared, tweeted or social and online marketing. Activate your best audience through the power of the link with kpa.ph');
       SEO::opengraph()->setUrl('https://kpa.ph');
       SEO::setCanonical('https://kpa.ph/about-us');
       SEO::opengraph()->addProperty('type', 'webservices');
       SEO::twitter()->setSite('@kingpauloaquino');

      if($hex_code == null) {
        $return_msg = ["message" => null];
        return view("welcome", compact('return_msg'));
      }

      $results = DB::select("SELECT * FROM short_url WHERE hex_code = '{$hex_code}' AND status = 1;");
      if(COUNT($results) > 0) {
        $origin_url = $this->has_http($results[0]->destination_url);

        $counter = $this->flag_counter($results[0]->id);

        return redirect($origin_url);
      }

      $return_msg = ["message" => "Sorry, the page you are looking for could not be found."];
      return view("welcome", compact('return_msg'));
    }

    public function generate_hexcode($id = 0, Request $request) {

      do {
        $hex_code = sprintf('%06X', mt_rand(0, 0xFFFFFF));
        $result = $this->is_exists($hex_code);
      }while($result);

      if(!IsSet($request["url"])) {
        return [
          "Status" => 404,
          "Message" => "Please enter your url.",
          "Hex_Code" => null,
          "Short_Url" => null,
          "Origin_Url_Title" => null,
          "Origin_Url" => null
        ];
      }

      $origin_url = $this->has_http($request["url"]);
      $shortUrl = new Url();
      $shortUrl->user_id = (int)$id;
      $shortUrl->hex_code = $hex_code;
      $shortUrl->destination_url = $origin_url;
      $shortUrl->status = 1;

      if($shortUrl->save()) {
        $origin_url_title = substr($origin_url, 0, 32);
        return [
          "Status" => 200,
          "Message" => "Success.",
          "Hex_Code" => $hex_code,
          "Short_Url" => $this::$app_["url"] . $hex_code,
          "Origin_Url_Title" => $origin_url_title,
          "Origin_Url" => $origin_url
        ];
      }

      return [
        "Status" => 500,
        "Message" => "Fail.",
        "Hex_Code" => null,
        "Short_Url" => null,
        "Origin_Url_Title" => null,
        "Origin_Url" => null
      ];
    }

    public function is_exists($hex_code) {
      $s = DB::select("SELECT * FROM short_url WHERE hex_code = '{$hex_code}' AND status = 1;");
      if( COUNT($s) > 0 ) {
        return true;
      }
      return false;
    }

    public function has_http($url_val) {
      // check if has http or https
      if (strpos($url_val, 'http://') !== false || strpos($url_val, 'https://') !== false) {
          return $url_val;
      }
      // no http or https included
      return redirect("http://". $url_val);
    }

    public function flag_counter($url_id) {
      $counter = new Counter();
      $counter->url_id = (int)$url_id;
      $counter->value = 1;
      return $counter->save();
    }

    public function get_counter($url_id) {
      $id = (int)$url_id;
      $db = DB::select("SELECT SUM(value) AS total_clicks FROM shorl_url_counter WHERE url_id = {$id};");
      return (int)$db[0]->total_clicks;
    }

    public function delete_url(Request $request) {
      $id = (int)$request["id"];
      $url = Url::find($id);
      if($url == null) {
        return ["Status" => 404];
      }
      if($url->delete()) {
        return ["Status" => 200];
      }
      return ["Status" => 500];
    }
}
