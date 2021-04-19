/*
but : écrire au montant au format eur 

*/


export default class MoneyFormat {

    
    formatMoneyAmount(amount)
    {
        let formatter;

        formatter = new Intl.NumberFormat('fr',
        {
            currency              : 'eur',
            maximumFractionDigits : 2,
            minimumFractionDigits : 2,
            style                 : 'currency'
        });

        return formatter.format(amount);
    }
}