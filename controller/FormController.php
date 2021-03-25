<?php 

require_once 'app/Https.php';
require_once 'app/Cookies.php';


/*

la class sert à : controller les formulaire 

methode controlRegistrer : controle le formulaire de la page register si tout est bon appel la fonction 
                           addOne de la classe User 
methode controlLogin: controle le formulaire de la page login si tout est bon gere les $_COOKIE et $_SESSION
                           
*/

class FormController{
    
    protected object $_user; // voir php3 -> exercice composition car dans _user il y a userModel enfaite 
    
    public function __construct(User $user){
        // voir php3 -> exercice composition car j'ai appelé la l'objet userModel 
        $this->_user = $user;
    }
    
    /**
     * utilisé pour la page d'inscription 
     * recoit un tableau de valeur ($post qui contient $_POST)
     * retourne soit un tableau d'erreur soit un tableau avec un seul indice qui contient la réussite de l'enregistrement
     */
    public function controlRegister(array $post){

        if(isset($post['firstName'],$post['lastName'],$post['email'],$post['password'],$post['password2'])
        && !empty($post['firstName'])   && !empty($post['lastName'])    && !empty($post['email'])
        && !empty($post['password'])    && !empty($post['password2'])){
            
            $message = [];

            // verifier que le mot de passe et celui de confirmation sont les memes 
            if($post['password'] !== $post['password2'] ) {
                $message[] = ' mot de passe et confirmation differents ';
            }
            // verifier que l'adresse email est bien une adresse e-mail 
            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
                $message[] = ' ce n\'est pas une adresse e-mail  ';
            }
            
            // verifie qu'un user existe 
            $user = $this->_user->findOne($post['email']);
            
            //var_dump($user,$message);
            
            // pour enregistrer un utilisateur il faut que je m'assure que son adresse mail n'est pas deja
            // utilisé par un autre donc if(empty($user)) veut dire qu'il existe pas 
            if(empty($user) && count($message) === 0){
                // voir php3 -> exercice composition car dans $this->_user il y a userModel enfaite 
                // j'appelle la méthode addOne de la classe user pour enregistrer mon user 
                $this->_user->addOne($post['firstName'],$post['lastName'],$post['password'],$post['email']);
                            
                return ["Bravo l'enregistrement à bien été éfféctué "];
                // enregistrer le user
            
            }elseif($user && count($message) === 0){
                
                return ["Cette adresse email est deja utilisée "];
            } 
             
            return $message;
            
            
        }else{
            
            return ['veuillez remplir tous les champs '];
            
        }
        
        
    }
    
    // ici $post = $_POST parce que j'ai écris dans index.php ligne 67 : $formController->controlLogin($_POST) 
    public function controlLogin(array $post){
        
        if(!empty($post['email']) && !empty($post['password']) )
        {
            // récupere l'user qui a le mail 
            $user = $this->_user->findOne($post['email']);
            // var_dump($user);
            // s'il l'utilisateur n'existe pas ou le mot de passe ne correspond pas 
            if(empty($user) || password_verify($post['password'], $user['password']) == false){
                
                return ["Mot de passe incorrect ou mail incorrect "];
                
            }else{

                if(isset($post['remember'])){
                    // Voir la fonction setCookies de la classe Function
                    // Maintenant que nous avons vu l'operateur de résolution de portée nous l'utilisons
                    // à utiliser avec précautions 
                    Cookies::setCookies(['email','password','test'],[ 'email' => $post['email'], 'password' => $post['password'],'test' => 'un exemple de cookie crée']);
                
                }else{
                    // Voir la fonction deleteCookie de la classe Function
                    Cookies::deleteCookie(['email','password']);
                }
                // je rajoute htmlspecialchars au cas ou il y'a du code js dans les champs  
                $_SESSION['id']             = intval($user['id']);
                $_SESSION['firstName']      = htmlspecialchars($user['firstName']);
                $_SESSION['lastName']       = htmlspecialchars($user['lastName']);
                $_SESSION['email']          = htmlspecialchars($user['email']);
                $_SESSION['address']        = htmlspecialchars($user['address']);
                $_SESSION['role']           = $user['role'];
                
                // je pourrai ajouter l'adresse de l'user en cas de commande pour indiquer le lieu de livraison
                // son pseudo , sa ville, son tel , etc ..... 
                require_once 'app/Https.php';
                $http = new Https();
                $http->redirect('index.php');
                    
                
            }
        } else {
            return [" veuillez remplir les champs"];
        
        }
        
        
    }


    public function formNewPass(array $post):string
    {
        if(!empty($post['password1']) 
            && !empty($post['password2']) 
            && !empty($post['password3']) 
            && !empty($post['id']))
        {
            $user = $this->_user->findOne($_SESSION['email']);

            if(password_verify($post['password1'], $user['password']) == false){
                return "Mot de passe incorrect";   
            }

            if($post['password2'] != $post['password3']){
                return 'les deux mots de passe ne concordent pas';
            }
             
            $this->_user->changePass($post);
            return 'la modification sera prise en compte a la prochaine connexion';
            
        } else {
            return " veuillez remplir les champs";
        }

        
    }

    public function formUpInfo(array $data) :string
    {

        if(!empty($data['firstName']) 
            && !empty($data['lastName']) 
            && !empty($data['address']) 
            && !empty($data['id']))
        {
            $error = [];
            // ici mes filtres 
             
            // si c'est bon j'enregistre 
            if(count($error) == 0){

                $this->_user->updateInfo($data);
                $_SESSION['firstName']      = htmlspecialchars($data['firstName']);
                $_SESSION['lastName']       = htmlspecialchars($data['lastName']);
                $_SESSION['address']        = htmlspecialchars($data['address']);
                return 'la modification à bien été prise en compte';

            }
            
        } else {

            return " veuillez remplir tous les champs";
        
        }
    }
    
}