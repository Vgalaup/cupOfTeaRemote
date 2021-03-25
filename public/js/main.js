import DisplayMyAccount from './classes/account/DisplayMyAccount.js';


document.addEventListener('DOMContentLoaded',()=>{
    document.addEventListener('click',(event)=>{
        if(event.target.matches('#account-l1')){
            new DisplayMyAccount(1);
        }
        else if(event.target.matches('#account-l2')){
            new DisplayMyAccount(2);
        }
        else if(event.target.matches('#account-l3')){
            new DisplayMyAccount(3);
        }
    })
})
