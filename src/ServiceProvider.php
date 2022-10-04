<?php

namespace Rogovaya_d\LaraAscii;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
   public function register()
   {

   }
   public function boot ()
   {
      $this->loadRoutesFrom(__DIR__.'/routes.php');
      $this->loadViewsFrom(__DIR__.'/views', 'ascii');
   }
}