<?php

namespace CupOftea;

class Autoloader
{
    // on utilise ici une fonction static, pour y acceder sans instancier la classe
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
        
    }
    
    static function autoload($class){

        // je recupere le namespace 
        $class = str_replace(__NAMESPACE__. '\\','',$class);

        // je change le '\' en '/'
        $class = str_replace('\\','/',$class); 

        // j'enleve le dossier qui contient l'autoloader ici core
        $directory = str_replace('/Core','',__DIR__); 

        // je colle ma class et mon dossier pour le require 
        if(file_exists($directory. '/' . $class . '.php')){
            require $directory .'/' . $class . '.php'; 
        }else{
            require $directory .  '/core/' .$class . '.php';
        }
    }


}