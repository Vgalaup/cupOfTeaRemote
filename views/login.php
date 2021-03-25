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
                    <div>
                      <label for="email"> Email </label>  
                      <input type="text" name="email" id="email" <?php $cookies->checkCookie('email') ?>/>
                    </div>
                    <div>
                      <label for="password"> password </label>  
                      <input type="password" name="password" id="password" <?php $cookies->checkCookie('password') ?>/>
                    </div>
                    <div>
                        <label for="remember" >Se souvenir de moi</label> 
                        <input type="checkbox" id="remember" name="remember" checked>
                    </div>
                    <input type="submit" value="connexion"/>
                </form>
            </div>
        </div>
    </section>
</main>

