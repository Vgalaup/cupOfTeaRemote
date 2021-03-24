<?php 

// récupere mes classes 
require_once 'app/Connect.php';
require_once 'app/Functions.php';
require_once 'models/Product.php';
require_once 'models/Category.php';


// j'intancie mes classes 
//$userModel       = new User();
$func            = new Functions();
$productModel    = new Product();
$categoryModel   = new Category();
// $formController  = new FormController($userModel); // voir php3 -> exercice composition 


// pour le format de mes valeurs 
$fmt = new NumberFormatter( 'fr_FR', NumberFormatter::CURRENCY );


if(array_key_exists('action',$_GET)){
    
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
        default:
            $func->redirect('index.php');
    }
      
}else{
    
    $func->redirect('index.php?action=home');
    
}










// récuperation du template 
require 'template/template.php';