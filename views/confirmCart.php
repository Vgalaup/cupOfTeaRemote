<h1>Votre Commande  :</h1>
<section id="user_detail" class="facture">
    <p id="orderId" data-order="<?= $_GET['orderId']?>">Commande N° : <?= $_GET['orderId']?></p>
    <p><?= $_SESSION['firstName'] ?> <?= $_SESSION['lastName'] ?></p>
    <p>Adresse : A créer et ajouter dans la Bdd </p> 
    <p>Ici normalement le code Postal </p> 
</section>
<section id="cart_details_validate" > 
    <div id="cart_details_table">
        <table class="table customTable">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix Unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>            
        <div class="amount-div">
            <p id="totalAmount"></p>
            <div>
                <a href="index.php?action=paiement&orderId=<?= $_GET['orderId'] ?>"class="btn-style-blue" id="makeOrderline">Paiement </a>
                <button class="btn-style-red" id="clearCart">Vider panier</button>                 
            </div>
        </div>
    </div>
    <div id="empty-cart"></div>
</section>

