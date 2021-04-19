import Cart from "../product/Cart.js";
import IconCart from "../product/IconCart.js";
import DisplayCart from '../product/DisplayCart.js';

export default class Refresh {
  constructor(cart = false) {
    this.cartName = cart;
    this.cart = new Cart();
    this.IconCart = new IconCart();
    this.DisplayCart = new DisplayCart();

    this.refresh();
  }

  refresh() {
    if (this.cartName !== false) {
      this.cart.saveCart(this.cartName);
    }

    this.IconCart.DisplayAmount();

    if(document.querySelector('#cart_details')){
      this.DisplayCart.verifCart();
    }

  }
}

