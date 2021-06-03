<main class="main">
    <div class="main__wrapper">
        <div class="main__title title">
            <div class="title__text"> CATALOG </div>
        </div>
        <div class = "container">
            <form class = "sort">
                Сортировать:
                <input class = "sort__btn" type ="button" value = "по возрастанию">
                <input class ="sort__btn" type = "button" value = "по убыванию">
            </form>
            <section class = "products">
                <?php foreach($data as $product){ ?>
                <article class = "product">
                    <a href = "product?id=<?php echo $product->getId(); ?>">
                        <div class = "product__wrapper">
                            <div class ="product__imgWrapper">
                                <img class = "product__img" src = "src/images/<?php echo $product->getImgName(); ?>">
                                <div class = "product__cost">$<?php echo $product->getPrice(); ?></div>
                            </div>
                            <p class = "product__name"><?php echo $product->getName(); ?></p>
                        </div>
                    </a>
                </article>
                <?php }?>
            </section>
        </div>
    </div>
</main>
