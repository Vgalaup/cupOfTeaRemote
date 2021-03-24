<main id="home">
    <div class="event"> <!--Zone événementielle. Pas vouée à rester-->
        <div class="container">
            <p>C'est noël, profitez-en&nbsp;</p>

            <img src="public/img/offre-noel.jpg" alt="Offres de noël">

            <p>* Pour toute commande effectuée avant le 20 décembre</p>

            <!-- Carrousel -->
            <div class="slider">
                <figure class="active slider-figure">
                    <img src="public/img/slider/1.jpg" alt="" />
                </figure>
        
                <figure class="slider-figure">
                    <img src="public/img/slider/2.jpg" alt="" />
                </figure>
            </div>
        </div>
    </div>

    <section class="choice-tea">
        <div class="container">
            <h1>Choisissez votre thé</h1>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, commodi. Architecto suscipit earum expedita itaque nemo. Molestias aliquid voluptate velit facilis optio aperiam mollitia asperiores omnis eveniet ad? Explicabo, cum? Excepturi est porro commodi quasi nesciunt deserunt, deleniti perspiciatis sequi alias ducimus inventore delectus consequatur culpa temporibus eius nam maxime molestiae ipsa dicta similique ea maiores sapiente repellat veritatis. Officia.
            </p>
            <div>
                <?php foreach($categories as $category) :?>
                <figure>
                    <a href="index.php?action=listing#<?= str_replace(' ', '', $category['name']); ?>"><img src="public/img/tea/<?= $category['picture']?>" alt=""></a>
                    <figcaption>
                        <a href="index.php?action=listing#<?= str_replace(' ', '', $category['name']); ?>"><?= $category['name'] ?></a>
                    </figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="selection-tea">
        <div class="container">
            <h2>Notre sélection</h2>
            <div>
                <article class="article-tea">
                    <h3><span>Notre nouveauté</span></h3>
                    <figure>
                        <img src="public/img/product/product1_big.jpg" alt="">
                        <figcaption>Thé du hammam</figcaption>
                    </figure>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, explicabo nemo. Maiores odit molestiae, amet saepe, quo mollitia enim delectus vitae tempora ut totam minus fugit officiis aspernatur eum velit?
                    </p>
                    <p>A partir de</p>
                    <p class="price"><strong>8,50€</strong></p>
                    <a class="btn" href="#">voir ce produit</a>
                </article>

                <article class="article-tea">
                    <h3><span>Notre best-seller</span></h3>
                    <figure>
                        <img src="public/img/product/product2_big.jpg" alt="">
                        <figcaption>Infusion Herboriste</figcaption>
                    </figure>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, explicabo nemo. Maiores odit molestiae, amet saepe, quo mollitia enim delectus vitae tempora ut totam minus fugit officiis aspernatur eum velit?
                    </p>
                    <p>A partir de</p>
                    <p class="price"><strong>7,60€</strong></p>
                    <a class="btn" href="#">voir ce produit</a>
                </article>

                <article class="article-tea">
                    <h3><span>Notre coup de c&oelig;ur</span></h3>
                    <figure>
                        <img src="public/img/product/product3_big.jpg" alt="">
                        <figcaption>Blue of London</figcaption>
                    </figure>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, explicabo nemo. Maiores odit molestiae, amet saepe, quo mollitia enim delectus vitae tempora ut totam minus fugit officiis aspernatur eum velit?
                    </p>
                    <p>A partir de</p>
                    <p class="price"><strong>9,00€</strong></p>
                    <a class="btn" href="product.html?id=1">voir ce produit</a>
                </article>
            </div>
        </div>
    </section>
</main>
