import Cart from "./../product/Cart.js";


export default class Order{
    
    constructor(){

        this.cart = new Cart();
        
    }
    // 2 je definis la methode saveOrderDetail -> index.php
    saveOrderDetail(){
        // je récupere le panier 


        // je fais mon formData

            // je récupere le num de la commande 
            // j'ajoute un champ qui me permettra de savoir quel fonction lancer dans AjaxController ex: formData.append('action','save-order')
            // index.php va le recevoir comme $_POST['action'] = 'save-order'

        // pour chaque produit commandé je fais une requete fetch pour l'ajouter dans la bdd 

    }

    UpdatePayment(amount,orderNumber) 
    {
        // j'utiliserai cette fonction apres le paiement pour changer le champ paid a Yes 
        // et ajouter le montant
    }
}