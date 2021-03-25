<?php 


class User extends Connect{
    
    protected object $_pdo;
    
    public function __construct(){
        
        $this->_pdo = $this->connexion();
    }
    
    /**
     * Enregistre un user dans la bdd 
     * Recoit les champs nécéssaire 
     * utilisé dans controlRegister, 
     */
    public function addOne(string $firstName,string $lastName,string $psw,string $mail){
        // crypte le mot de passe 
        $psw = password_hash($psw, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO `users`(`email`, `password`, `firstName`, `lastName`) 
        VALUES (:email,:password,:firstName,:lastName)";
        $q = $this->_pdo->prepare($sql);
        $q->execute([
                    ':email'    => $mail,
                    ':password' => $psw,
                    ':firstName'=> $firstName,
                    ':lastName' => $lastName
                    ]);  
        
        
    }
    
    /**
     * Cherche un utilisateur
     * récoit le mail de l'user 
     * retourne soit l'user soit empty 
     * utilisé dans le controlRegister,controlLogin
     */
    public function findOne($mail){
        
        $sql = "SELECT `id`, `email`, `password`, `firstName`, `lastName`,`role` FROM `users` WHERE `email` = :mail";
        $q = $this->_pdo->prepare($sql);
        $q->execute([
                    ':mail' => $mail
                    ]);  
        
        return $q->fetch(\PDO::FETCH_ASSOC); 
    }
    
    
    
    

    
}