import DisplayMyAccount from "./classes/account/DisplayMyAccount.js";
import Cart from "./classes/product/Cart.js";
import Product from "./classes/product/Product.js";
import Refresh from "./classes/utilities/Refresh.js";
import Slider from "./classes/slider/Slider.js";

let cart = new Cart();
let product = new Product();

document.addEventListener("DOMContentLoaded", () => {
  const sliders    = document.querySelectorAll('.slider-figure')
  if(sliders.length > 0)
    new Slider();

  // permet de tout mettre à jour
  new Refresh();

  document.addEventListener("click", (event) => {
    // Evenement gestion page mon compte
    if (event.target.matches("#account-l1")) {
      new DisplayMyAccount(1);
    } else if (event.target.matches("#account-l2")) {
      new DisplayMyAccount(2);
    } else if (event.target.matches("#account-l3")) {
      new DisplayMyAccount(3);
    }

    // evenement gestion panier
    else if (event.target.matches("#add-product")) {
      event.preventDefault();
      product.addProductToCard();
    }
  });
});
