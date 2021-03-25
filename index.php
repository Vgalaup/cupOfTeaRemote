<?php 
session_start();

// récupere mes classes 
require_once 'app/Connect.php';
require_once 'app/Https.php';
require_once 'app/Cookies.php';
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';
require_once 'controller/FormController.php';
require_once 'controller/AjaxController.php';



// j'intancie mes classes 
$userModel       = new User();
$http            = new Https();
$cookies         = new Cookies();
$productModel    = new Product();
$categoryModel   = new Category();
$formController  = new FormController($userModel); // voir php3 -> exercice composition 


// pour le format de mes valeurs 
$fmt = new NumberFormatter( 'fr_FR', NumberFormatter::CURRENCY );

if(array_key_exists('ajax',$_GET)){
    
    // redirige vers home s'il n'y a pas de $_POST
    if(!array_key_exists('action', $_POST)) 
        $http->redirect('index.php?action=home');
    
    $ajax = new AjaxController();
    
    switch($_POST['action']) 
    {
        case 'upPass':
            // var_dump($_POST);
            echo $ajax->changePassword($_POST);
        break;

        case 'upInfo':
            $message = $ajax->formUpInfo($_POST);
            echo json_encode($message);
        break;
    }
    
}
elseif(array_key_exists('action',$_GET)){
    
    switch($_GET['action']){
        
        
        // case qui affiche la page a propos de nous 
        case 'about':
            $path = 'about.php'; // attention la premiere partie du chemin du fichier et dans le template 
        break;
        
        // case qui affiche la page d'accueil 
        case 'home':
            $categories = $categoryModel->findAll(); // récupere chaque catégorie 
            $path = 'home.php';
        break;
        
        // cases qui impliquent affichage de tous les produits et affichage d'un produit 
        case 'listing':
            $categorieNames = $categoryModel->findAll(); // récupere chaque catégorie 
            $path = 'listing.php';
        break;
        
        // case qui m'affiche la page ou il y a un produit 
        case 'product':
            
            $product = $productModel->findOne($_GET['pId']); // récupere un produit 
            $path = 'product.php';
        break;

        // cases qui impliquent la création de compte, connexion et deconnexion  
        case 'register':
            //  s'il est en ligne redirigé vers accueil sinon on fait rien 
            ($http->isOnline()) ? $http->redirect('index.php') : '' ; 

            /* equivalent à 
            if($http->isOnline() == true){
                $http->redirect('index.php');
            }*/

            if($_POST):
                $message = $formController->controlRegister($_POST); // controler le formulaire d'enregistrement 
                //var_dump($message);
            endif;
            $path = 'register.php';
        break;
        case 'login':
            // voir explication case register 
            ($http->isOnline()) ? $http->redirect('index.php') : '' ; 

            if($_POST):
                $message = $formController->controlLogin($_POST); // controler le formulaire de connexion 
                //var_dump($message);
            endif;
            $path = 'login.php';
        break;
        case 'logout':
            session_destroy();
            $http->redirect('index.php');
        break;

        // case qui implique la gestion du profil 
        case 'account':
            $path = 'account.php';
            
        break;

        default:
            $http->redirect('index.php');
    
    }
     

    // récuperation du template 
    require 'template/template.php';

}else{
    
    $http->redirect('index.php?action=home');
    
}



