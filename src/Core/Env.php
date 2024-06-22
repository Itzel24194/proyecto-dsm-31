<?php
namespace App\Core;
use Dotenv\Dotenv;

Class Env {
    public static function load($dir){
        print_r($dir.'.env');
        if(file_exists($dir.'.env')){
            throw new \Exception('El archivo no existeggggg');
        }
        $dotenv = Dotenv::createImmutable($dir);
        $dotenv->load();
    }

}
    