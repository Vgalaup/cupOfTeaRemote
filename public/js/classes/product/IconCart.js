import Cart from './Cart.js';
import Refresh from '../utilities/Refresh.js';
/*
But de la classe : gestion du panier 
methodes:

loadCart : recupere le panier

saveCart : sauvegarde le panier 

clearCart : vide le panier 


*/

export default class IconCart {

    constructor(){
        
        this.cart    = new Cart();

    }


    DisplayAmount() 
    {
        const card = this.cart.loadCart();

        let totalAmount = 0;

        for( let value of card ){
            // pour chaque valeur de mon panier j'ajoute prix*qte au montant total
            totalAmount += Number(value.price) * value.quantity;

        }
        
        // récuperer la balise pour afficher le montant dedaans 
        document.querySelector('.panier strong').textContent = totalAmount;       
    }

}