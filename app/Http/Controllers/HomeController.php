<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Url;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->token == "") {
          $sdk = new SDKController();
          $token = $sdk->generata_kpa_token()["token"];
          $user = User::where('id', Auth::user()->id)
          ->update(
            ["token" => $token]
          );
          return redirect("/home");
        }

        $urls = Url::where("user_id", Auth::user()->id)->get()->toArray();

        return view('home', compact('urls'));
    }

    
}
