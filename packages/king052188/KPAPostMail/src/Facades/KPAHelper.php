<?php
namespace king052188\KPAPostMail\Facades;

use Illuminate\Support\Facades\Facade;

class KPAHelper extends Facade
{
  protected static function getFacadeAccessor() {
    return 'king052188-kpahelper';
  }
}
