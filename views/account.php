<main id="myAccount">
    <div class="flexR">
        <div class="accountList">
            <ul>
                <li id="account-l1">Mon profil</li>
                <li id="account-l2">Modifier infos</li>
                <li id="account-l3">Modifier password</li>
                <li><a href="index.php?action=logout">déconnexion</a></li>
            </ul>
        </div>
        <div class="accountContent">
            <div class="accountContent1">
                <h2>Mes informations</h2>
                <article>
                    <p>Numero utilisateur : NU<?= $_SESSION['id'] ?></p>
                    <p>identité : <?= $_SESSION['firstName'] ?> <?= $_SESSION['lastName'] ?></p>
                    <p><em>email : <?= $_SESSION['email'] ?></em></p>
                    <p>adresse : <?= $_SESSION['address'] ? $_SESSION['address']  :'Aucune adresse définie.'; ?></p>
                </article>
            </div>
            <div class="accountContent2 hidediv">
                <h2>Modifier mes informations </h2>
                <div class="form">
                <form method="POST" class="flex" id="formUpInfo">
                    <div class="alert return1 "></div>
                    <div>
                      <input type="hidden" name="numUser" id="numUser" value="<?= $_SESSION['id'] ?>"/>
                    </div>
                    <div>
                      <label for="firstName"> Prenom </label>  
                      <input type="text" name="firstName" id="firstName" value="<?= $_SESSION['firstName'] ?>"/>
                    </div>
                    <div>
                      <label for="lastName"> Nom </label>  
                      <input type="lastName" name="lastName" id="lastName" value="<?= $_SESSION['lastName'] ?>"/>
                    </div>
                    <div>
                      <label for="adresse"> adresse </label>  
                      <input type="text" name="adresse" id="adresse" value="<?= $_SESSION['address'] ? $_SESSION['address']  :'' ?>" />
                    </div>
                    
                    <input type="submit" value="Modifier informations"/>
                </form>
            </div>
            </div>
            <div class="accountContent3 hidediv">
                <h2>Modifier mot de passe </h2>
                <div class="form">
                <form method="POST" class="flex" id="formUpPass">
                    <div class="alert return2 "></div>
                    <div>
                      <input type="hidden" name="numUser" id="numUser" value="<?= $_SESSION['id'] ?>"/>
                    </div>
                    <div>
                      <label for="password1"> ancien password </label>  
                      <input type="password" name="password1" id="password1"/>
                    </div>
                    <div>
                      <label for="password2"> nouveau password </label>  
                      <input type="password" name="password2" id="password2"/>
                    </div>
                    <div>
                      <label for="password3"> confirm password </label>  
                      <input type="password" name="password3" id="password3"/>
                    </div>
                    
                    <input type="submit" value="s'enregistrer"/>
                </form>
            </div>
            </div>
        </div>
    </div>
</main>

