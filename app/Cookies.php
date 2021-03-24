<?php

class Cookies
{
    // supprime les cookies appelé en parametre 
    static function deleteCookie(array $cookies) :void{
        
        foreach($cookies as $cookieName){
            
        
            if(array_key_exists($cookieName,$_COOKIE)){
                // pour supprimer un cookie il faut l'appeler juste avant
                setcookie($cookieName);                                                
                unset($_COOKIE[$cookieName]);
                                                                
            }
            
            
        }
        
    }
    
    // supprime les cookies appelé en parametre 
    static function setCookies(array $cookies,array $array) :void{
        
            //var_dump($array);
            foreach($cookies as $cookieName){
            // setcookie('password',$array['password'], time()+365*24*3600)
            // le nom du cookie est le 1 parametre de la fonction 
            // le contenu c'est le 2ieme parametre de la fonction 
            setcookie($cookieName,$array[$cookieName],time()+365*24*3600);
    
        }
        
    }
        
    // verifie si un cookie existe pour l'afficher dans un input 
    public function checkCookie(string $cookieName) :void{
        
        if(array_key_exists($cookieName,$_COOKIE)){
                                                            
            echo "value='".$_COOKIE[$cookieName]."'";
                                                            
        }
        
    }
}