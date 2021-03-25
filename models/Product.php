<?php 

class Product extends Connect{
    
    protected object $_pdo;
    
    public function __construct(){
        
        $this->_pdo = $this->connexion();
    }
    
    /**
     * récupere tous les produits liées à une catégorie utilisé dans la  vue listing
     */
    public function findByCategory($categoryId){
        
        $sql = "SELECT `id`, `name`, `content`, `quantity`, `price`, `picture`, `category_id`, `date_creation` 
                FROM `product` 
                WHERE `category_id` = :category_id";
        $q = $this->_pdo->prepare($sql);
        $q->execute([
                    'category_id' => $categoryId
                    ]);  
        
        return $q->fetchAll(PDO::FETCH_ASSOC);  
        
    }
    /**
     * récupere un produit utilisé pour case product
     */
    public function findOne($productId){
        
        $sql = "SELECT `id`, `name`, `content`, `quantity`, `price`, `picture`, `category_id`, `date_creation` 
                FROM `product` 
                WHERE `id` = :product_id";
        $q = $this->_pdo->prepare($sql);
        $q->execute([
                    'product_id' => $productId
                    ]);  
        
        return $q->fetch(PDO::FETCH_ASSOC);  
        
    }
    

    
    
}