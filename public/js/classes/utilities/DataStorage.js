/*
But de la classe : faire le lien avec le localStorage
methodes:

saveDataToDomStorage : enregistre dans le LocalStorage

loadDataToDomStorage : recupere depuis le LocalStorage


*/

export default class DataStorage {


    saveDataToDomStorage(name, data)
    {
        // serialisation
        const jsonData = JSON.stringify(data);
        // envoi dans le local storage
        window.localStorage.setItem(name, jsonData);
    }

    loadDataFromDomStorage(name)
    {
        // recuperation localStorage
        const jsonData = window.localStorage.getItem(name);
    
        // deserialisation
        return JSON.parse(jsonData);
    }


}