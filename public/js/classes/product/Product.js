import Cart from './Cart.js';
import Refresh from '../utilities/Refresh.js';

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

    removeProduct(productId)
    {
        console.log(`je veux supprimer le produit ${productId}`)

        // je récupere mon panier 
        const card = this.cart.loadCart();

        // je boucle sur toutes les valeurs de mon panier
        for(let i =0; i < card.length ; i++ ){

            if(card[i].id == productId){
                // je rentre dans le if si le numero du produit cliqué existe dans le panier
                card.splice(i,1)
            }

        }
        new Refresh(card);
        // console.log(card)

        // let newCard = card.filter(elem => {
        //     elem.id !== productId
        // })

        // console.log(newCard)



    }
    
    // version alternative : pour celle la modifier la façon dont le bouton est crée
    // removeItem(i){
    //     let p =JSON.parse(window.localStorage.getItem('panier'));
    //     p.splice(i,1)

    //     localStorage.setItem('panier',[JSON.stringify(p)]);
    //     this.displayPanier();

    // }
    // // <button class=supprbtn data-i="+i+">suppr</button>
}