<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 5/2/2019
 * Time: 1:39 PM
 */

namespace Nirjhor\Contact;

use Illuminate\Support\ServiceProvider;


class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact'); //contact is the package name
        $this->loadMigrationsFrom(__DIR__.'/database/migrations'); //
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact'); //contact is the package name

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }


    public function register(){

    }

}

?>


