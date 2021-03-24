<?php 

class Functions{
    
    // function qui me facilite les redirections 
    public function redirect(string $path) :void {
    
        header('Location: '.$path);
        exit;
        
    } 
    // si je suis connecté j'ai accés a certaines page et d'autre non, ex : si je suis connecté je peux plus aller sur login.php
    public function isOnline() :bool {
        
        // verifie qu'une personne est connectée 
        if (array_key_exists('role', $_SESSION)) {
            
            return true;
            
        }else {
        // return soit true soit false 
            return false;
        }
        
    }
    
    // supprime les cookies appelé en parametre 
    public function deleteCookie(array $cookies) :void{
        
        foreach($cookies as $cookieName){
            
        
            if(array_key_exists($cookieName,$_COOKIE)){
                // pour supprimer un cookie il faut l'appeler juste avant
                setcookie($cookieName);                                                
                unset($_COOKIE[$cookieName]);
                                                                
            }
            
            
        }
        
    }
    
    // supprime les cookies appelé en parametre 
    public function setCookies(array $cookies,array $array) :void{
        
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