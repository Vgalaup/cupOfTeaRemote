<?php 

class Orders extends Connect{
    
    protected $_pdo;
    
    public function __construct(){
        
        $this->_pdo = $this->connexion();
    }
    
    public function addOne(int $id_user) :int{

        // preparation 
        $sql='INSERT INTO `orders` (`user_id`) VALUES (:id_user)';
        $q = $this->_pdo->prepare($sql);
        $q->execute([':id_user' => $id_user ]);  
        
        return $this->_pdo->lastInsertId();
    }
    
    public function updateOrder(array $data){
        
        
        
    }

}