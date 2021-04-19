import MoneyFormat from '../utilities/MoneyFormat.js';
import Cart from './Cart.js';

export default class DisplayCart
{
    constructor(){

        this.cart               = new Cart();
        this.moneyFormat        = new MoneyFormat();    
        this.card_empty         = document.querySelector('#empty-cart');
        this.card_not_empty     = document.querySelector('#cart_details_table');

    }

    // cette fonction verifie si le panier est vide ou pas,  selon le resultat il appelle une fonction differente
    verifCart(page = 'shopCart'){
        
        // recupere mon panier du localStorage 
        this.panier = this.cart.loadCart(); 
        
        // ternaire si panier vide on appelle une fonction sinon l'autre
        (this.panier.length == 0) ? this.displayEmptyCard() : this.displayCard(page) ;
        /*       
        version longue de la ternaire au dessus 
        if(this.cart.length == 0)
        {
            return this.displayEmptyCard();
            
        }else{
            
            return this.displayCard();
            
        }*/
        
    }
    createOneElement(element,content = null){
        
        let el = document.createElement(element);
        el.textContent = content;
        
        return el;
    }

    displayEmptyCard(){
        // met a jour l'affichage 
        this.card_not_empty.style.display   = 'none';
        this.card_empty.style.display       = 'block';

        let h3 = this.createOneElement('h3','Désolé, votre panier est vide.');
        this.card_empty.append(h3)
        
    }

    displayCard(page){
        // met a jour l'affichage 
        this.card_not_empty.style.display   = 'block';
        this.card_empty.style.display       = 'none';

        // récupere le corps du tableau 
        this.tablebody   = document.querySelector('#cart_details_table tbody');
        this.tablebody.innerHTML = '';

        // remplissage du body 
        for(let value of this.panier){
    
            // création d'une ligne 
            let newTr = this.createOneElement('tr');
            
            // tout les td qui vont remplir ma tr 
            const td1 = this.createOneElement('td',value.name);
            const td2 = this.createOneElement('td',`${this.moneyFormat.formatMoneyAmount(value.price)}`);
            const td3 = this.createOneElement('td',value.quantity);
            const td4 = this.createOneElement('td',`${this.moneyFormat.formatMoneyAmount(value.price*value.quantity)}`)
            
            newTr.append(td1,td2,td3,td4)

            this.tablebody.prepend(newTr);
        
        }

        


    }
}