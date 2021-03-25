import Cart from './Cart.js';


export default class Refresh {

    constructor(cart = false){

        this.cartName = cart;
        this.cart = new Cart();
        

        this.refresh();
        
    }

    refresh(){
    
        
    }

   

}