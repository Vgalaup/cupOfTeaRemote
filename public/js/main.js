import DisplayMyAccount from './classes/account/DisplayMyAccount.js';
import Cart from './classes/product/Cart.js';
import Product from './classes/product/Product.js';
import Refresh from './classes/product/Refresh.js';


let cart                = new Cart();
let product             = new Product();

document.addEventListener('DOMContentLoaded',()=>{

    new Refresh(); // permet de tout mettre à jour 

    document.addEventListener('click',(event)=>{

        // Evenement gestion page mon compte 
        if(event.target.matches('#account-l1')){
            new DisplayMyAccount(1);
        }
        else if(event.target.matches('#account-l2')){
            new DisplayMyAccount(2);
        }
        else if(event.target.matches('#account-l3')){
            new DisplayMyAccount(3);
        }

        // evenement gestion panier 
        else if(event.target.matches('#add-product')){
            event.preventDefault();
            product.addProductToCard();
        }
    })

})
