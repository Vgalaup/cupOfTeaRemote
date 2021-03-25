<?php 

class Category extends Connect{
    
    protected object $_pdo;
    
    public function __construct(){
        
        $this->_pdo = $this->connexion();
    }
    
    /**
     * récupere toutes mes categories 
     * utilisé dans la page home , listing 
     */
    public function findAll(){

        // preparation 
        $sql="SELECT `id`, `name`, `content`, `picture` FROM `category`";
        $q = $this->_pdo->prepare($sql);
        $q->execute();  
        
        return $q->fetchAll(PDO::FETCH_ASSOC);
    }
    
}