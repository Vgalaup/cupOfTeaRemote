<div class="alert"><?= $message = ($http->isOnline()) ? '' : 'Attention vous devez etre connecté pour pouvoir valider la commande' ?></div>
<h1>Votre panier</h1>

<section id="cart_details" > 
    <div id="cart_details_table">
        <table class="table customTable">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix Unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>            
        <div class="amount-div">
            <p id="totalAmount"></p>
            <div>
                <a href="index.php?action=confirmCart"class="btn-style-blue">Passer commande</a>
                <button class="btn-style-red" id="clearCart">Vider panier</button>                 
            </div>
        </div>
    </div>
    <div id="empty-cart"></div>
</section>

