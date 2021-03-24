<?php 

class Https{
    
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
    
    
    
}