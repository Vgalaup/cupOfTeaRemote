import displayMyAccount from './classes/displayMyAccount.js';
import managerMyAccount from './classes/managerMyAccount.js';


document.addEventListener('DOMContentLoaded',()=>{
    document.addEventListener('click',(event)=>{
        if(event.target.matches('#account-l1')){
            new displayMyAccount(1);
        }
        else if(event.target.matches('#account-l2')){
            new displayMyAccount(2);
        }
        else if(event.target.matches('#account-l3')){
            new displayMyAccount(3);
        }
    })
})
