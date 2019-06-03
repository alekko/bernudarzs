<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider {
  public function register()
  {
    config([
      'laravellocalization.supportedLocales' => [
        'lv'  => array( 'name' => 'LV', 'script' => 'Latn', 'native' => 'latviešu' ),
        'en'  => array( 'name' => 'EN', 'script' => 'Latn', 'native' => 'English' ),
      ],

      'laravellocalization.useAcceptLanguageHeader' => true,

      'laravellocalization.hideDefaultLocaleInURL' => true
    ]);
  }
}
