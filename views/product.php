<main id="product">
    <section>
        <div class="container">
            <h1>Le meilleur du thé</h1>
            <article>
                <div>
                    <div>
                        <h2><?= $product['name'] ?></h2>
                        <p>Réf : 133742</p>
                    </div>

                    <div>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>

                        <a href="#">Voir les 56 avis</a>
                    </div>
                </div>

                <div>
                    <img src="public/img/product/<?= $product['picture'] ?>" alt="<?= $product['name'] ?>">

                    <form action="#" method="post">
                        <div>
                            <p id="product-name"><?= $product['name'] ?></p>
                        </div>
                        <div>
                            <input type="hidden" name="idProduct" id="numProduct" value="<?= $product['id'] ?>"/>
                        </div>
                        <div>
                            <select id="quantities" name="quantity">
                                <option data-price="9,00€" value="100">Sachet de 100 g</option>
                                <!--<option data-price="40,00€" value="500">Sachet de 500 g</option>
                                <option data-price="75,00€" value="1000">Sachet de 1 kg</option>-->
                            </select>
                        </div>
                        <div>
                            <p id="price"><span><?= $product['price'] ?></span> €</p>
                        </div>
                        <div>
                            <button class="btn" id="add-product" type="submit">Ajouter au panier</button>
                        </div>
                        
                    </form>
                </div>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor eius iusto nihil atque odio odit praesentium amet, aliquam numquam labore laboriosam provident aliquid voluptatem quasi similique aperiam? Molestias, voluptatum eos. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit blanditiis ullam delectus aliquam illum omnis provident vero qui cum, deserunt, quasi dignissimos maxime? Ea perferendis nisi reiciendis aut facilis expedita!
                </p>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis delectus natus non excepturi voluptatem repellat cumque explicabo itaque? Sapiente aspernatur illo natus sunt accusantium mollitia non, est accusamus placeat obcaecati? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempora, mollitia, fuga nihil ullam suscipit assumenda quas sint nulla repudiandae voluptatibus! Dolores, assumenda! Libero, quo officiis tempore nulla minus sed.
                </p>

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores officiis a excepturi dignissimos alias, quo, nisi, facere placeat est reprehenderit illo veritatis! Ullam accusantium cum necessitatibus est natus iusto adipisci.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quae, animi voluptas placeat eos quia praesentium molestias voluptatibus adipisci doloribus qui et, neque expedita. Non ad maiores rem unde maxime?
                </p>
            </article>
        </div>
    </section>
</main>

