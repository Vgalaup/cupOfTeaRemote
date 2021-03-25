import managerMyAccount from './classes/managerMyAccount.js';

// soumission du formulaire 
if(document.forms["formUpInfo"]){

    document.forms["formUpInfo"].addEventListener('submit',(event)=>{

        event.preventDefault();

        const manager = new managerMyAccount();
        manager.formUpInfo();

        
        // // je recupere les valeurs du formulaire
        // let id = document.querySelector('#numUser').value;
        // let firstName = document.querySelector('#firstName').value;
        // let lastName = document.querySelector('#lastName').value;
        // let adress = document.querySelector('#adresse').value;
 
        // // console.log(id,firstName,lastName,adress)
        // // utilisation du formData et de fetch
        // let formData = new FormData();
        // formData.append('action','upInfo')
        // formData.append('id', id)
        // formData.append('firstName', firstName)
        // formData.append('lastName', lastName)
        // formData.append('address', adress)

        
        // fetch('index.php?ajax=upInfo',{ method: 'POST', body: formData })
        // .then(res => res.text())
        // .then(function(mes){
        //     document.querySelector('.return1').innerHTML = mes;
        //     document.forms["formUpInfo"].reset();
    
        // })
    
    });
    
}

if(document.forms["formUpPass"]){

    document.forms["formUpPass"].addEventListener('submit',(event)=>{

        event.preventDefault();

        const manager = new managerMyAccount();
        manager.formUpPass();
        
        // // je recupere les valeurs du formulaire
        // let id = document.querySelector('#numUser').value;
        // let password1 = document.querySelector('#password1').value;
        // let password2 = document.querySelector('#password2').value;
        // let password3 = document.querySelector('#password3').value;
        
        // // utilisation du formData et de fetch
        // let formData = new FormData()
        // formData.append('action','upPass')
        // formData.append('id', id)
        // formData.append('password1', password1)
        // formData.append('password2', password2)
        // formData.append('password3', password3)
        
        // fetch('index.php?ajax=upPass',{ method: 'POST', body: formData })
        // .then(res => res.text())
        // .then(function(mes){
            
        //     document.querySelector('.return2').innerHTML = mes;
        //     document.formulaire.reset();
    
        // })
    
    });
    
}
