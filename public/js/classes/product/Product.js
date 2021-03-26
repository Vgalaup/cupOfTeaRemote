import Cart from './Cart.js';
import Refresh from './Refresh.js';

/*
But de la classe : gestion des produits 

addProduct : ajoute un produit 

removeProduct : enleve un produit 

*/
export default class Product {

    constructor(){

        this.cart = new Cart();

    }

    
    addProductToCard(){

        // je récupere mon panier 
        const card = this.cart.loadCart();

        // il me faut un produit 
        const product = {};
        product.id = document.querySelector('#numProduct').value;
        product.name = document.querySelector('#product-name').textContent;
        product.quantity = 1;
        product.price = document.querySelector('#price span').textContent;
        product.photo = document.querySelector('img').src;

        // console.log(product);
        // je dois verifier si le produit n'existe pas deja avant de l'ajouter au panier
        for( let value of card ){

            if(value.id == product.id){

                value.quantity++;
                new Refresh(card);
                return;

            }
            
        }

        // j'ajoute au panier 
        card.push(product);

        new Refresh(card);
            
    }

    removeProduct()
    {

    }
    

}