<main id="product">
    <section>
        <div class="container">
            <h1>Créer votre compte </h1>
            <div class="form">
                <form method="POST" class="flex">
                    <?php if(isset($message)): ?>
                    <div class="alert">
                        <?php foreach($message as $mes) : ?>
                        <p><?= $mes ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif;?>
                    <!-- je peux rajouter un truc du style si jamais c'est un succes alors je cache le formulaire -->
                    <div>
                      <label for="firstName"> Prenom </label>  
                      <input type="text" name="firstName" id="firstName"/>
                    </div>
                    <div>
                      <label for="lastName"> Nom </label>  
                      <input type="lastName" name="lastName" id="lastName"/>
                    </div>
                    <div>
                      <label for="email"> Email </label>  
                      <input type="text" name="email" id="email"/>
                    </div>
                    <div>
                      <label for="password"> password </label>  
                      <input type="password" name="password" id="password"/>
                    </div>
                    <div>
                      <label for="password2"> confirm password </label>  
                      <input type="password" name="password2" id="password2"/>
                    </div>
                    
                    <input type="submit" value="s'enregistrer"/>
                </form>
            </div>
        </div>
    </section>
</main>

