<main id="listing">
    <?php foreach($categorieNames as $categoryName) : ?>
    <section>
        <div class="container">
            <h2 id="<?= str_replace(' ', '', $categoryName['name']); ?>"><span><?= $categoryName['name'] ?></span></h2>

            <p><?= $categoryName['content'] ?></p>

            <div>
                <?php 
                        // dans chaque section j'ai une requete qui me recupere chaque produit liée a la section 
                        $products = $productModel->findByCategory($categoryName['id']) ; 
                ?>
                <?php foreach($products as $product) :?>
                <article class="article-tea">
                    <h3><?= $product['name'] ?></h3>

                    <img src="public/img/product/<?= $product['picture'] ?>" alt="<?= $product['name'] ?>">

                    <p><?= $product['content'] ?></p>

                    <p>
                        A partir de
                    </p>

                    <p class="price">
                        <?= $fmt->formatCurrency($product['price'], "EUR") ?>
                    </p>

                    <a class="btn" href="index.php?action=product&pId=<?= intval($product['id']) ?>">voir ce produit</a>
                </article>
                <?php endforeach;?>

            </div>
        </div>
    </section>
    <?php endforeach ; ?>

</main>


<!--
avant le php 364 lignes de html 

apres le php 36 lignes 

-->
