<main class="main">
    <div class="main__wrapper">
        <div class="main__title title">
            <div class="title__text"> CATALOG </div>
        </div>
        <div class = "container">
            <section class = "product">
                <div class = "product__wrapper">
                    <div class = "product__image">
                        <img src = "src/images/<?php echo $data->getImgName(); ?>">
                    </div>
                    <section class = "product__information">
                        <h2 class ="product__name"><?php echo $data->getName(); ?></h2>
                        <p class =""><?php echo $data->getDescription(); ?></p>
                        <input class = "button" type = "button" value="Add to cart">
                    </section>
                </div>
            </section>
        </div>
    </div>
</main>