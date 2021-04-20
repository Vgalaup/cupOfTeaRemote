<?php 

namespace CupOftea\models;

Use PDO;
Use CupOftea\core\Connect;


class OrderDetails extends Connect{
    
    protected $_pdo;
    
    public function __construct(){
        
        $this->_pdo = $this->connexion();
    }
    
    // 6 methode addOrderDetail a remplir 
    public function addOrderDetail(array $data)
    {
        // Bonus à faire chez vous si vous avez envie verifier d'abord que la commande n'a pas été enregistré 
        
        // preparation 

        // execution  
            // attention le prix sera recuperer dans la methode -> recupPriceProduct
    }
    

    // 7 la methode recup price recupere l'id du produit et retourne le prix 
    public function recupPriceProduct(int $idProduct){
        

        
        // return $value['price'];
        // on peut pratiquement proceder au paiement 
        
    }
    
    public function updateOrder(array $data){
        
        
        
    }

}