<?php

namespace king052188\KPAPostMail;

use Illuminate\Support\Facades\Config;

class KPAHelper
{
  private static $config_app;
  private static $config_services;

  public function __construct() {
    $this::$config_app = Config::get('app');
    $this::$config_services = Config::get('services');
  }

  public function getConfigApp($key = null) {
    if($key==null) {
      return $this::$config_app;
    }
    return $this::$config_app[$key];
  }

  public function getConfigServices() {
    return $this::$config_services;
  }

  public function Curl($url = null, $data = []) {

    if($url == null) {
      return ["Status" => 401];
    }

    if(COUNT($data) == 0) {
      return ["Status" => 402];
    }

    // Array to Json
    $toJSON = json_encode($data);

    // Added JSON Header
    $headers= array('Accept: application/json','Content-Type: application/json');

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $toJSON);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $result;
  }


}
