<main class="main">
    <div class="main__wrapper">
        <div class="main__title title">
            <div class="title__text"> HOME PAGE </div>
        </div>
        <div id="menu_list" class="main__list">
            <?php foreach($data as $product){ ?>
            <a class="product" href = "/product?id=<?php echo $product->getId(); ?>">
                <img src="src/images/<?php echo $product->getImgName(); ?>" alt="" class="product__img">
                <div class="product__info">
                    <div class="product__name"> <?php echo $product->getName(); ?></div>
                    <div class="product__price"> $<?php echo $product->getPrice(); ?></div>

                </div>
            </a>
            <?php } ?>
        </div>
    </div>
</main>