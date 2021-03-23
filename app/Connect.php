<?php

abstract class Connect{
    
    protected string $_host       = 'localhost';
    protected string $_dbName     = 'CupOfTea';
    protected string $_user       = 'root';
    protected string $_password   = 'root';

    
    public function connexion(){
        try{       
                // objet qui appartient a php et qui me permet ma connexion 
                $pdo = new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbName,$this->_user,$this->_password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->exec('SET NAMES UTF8');
                return $pdo;
                
        }catch(Exception $e){
            
            echo '<br>le fichier d\' erreur est : '.$e->getFile().' veuillez contacter l administrateur';
        }
    
        
    }
    
}