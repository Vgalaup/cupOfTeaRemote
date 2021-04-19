import DataStorage from "../utilities/DataStorage.js";
import Refresh from "../utilities/Refresh.js";
/*
But de la classe : gestion du panier 
methodes:

loadCart : recupere le panier

saveCart : sauvegarde le panier 

clearCart : vide le panier 


*/

export default class Cart {
  constructor() {
    this.cart = new DataStorage();
  }

  loadCart() {
    let shoppingCart = this.cart.loadDataFromDomStorage("cart");

    if (shoppingCart == null) {
      shoppingCart = [];
    }

    return shoppingCart;
  }

  saveCart(card) {
    this.cart.saveDataToDomStorage("cart", card);
  }

  clearCart() {
    localStorage.clear();
    const refresh = new Refresh([]);
  }
}
