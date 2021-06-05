const getProducts = async () => {
    response = await fetch(`http://myproject.loc/MainApi`, {
        method: "GET",
        headers: {
            'Content-Type': 'application/json'
        },
    });

    const products = await response.json();
    return products;
}

function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}

getProducts().then((products) => {
    let product_html;
    products.forEach(product => {
        product_html += `<a class="product" href = "#">
                <img src="src/images/${product['imgName']}" alt="" class="product__img">
                <div class="product__info">
                    <div class="product__name"> ${product['name']}</div>
                    <div class="product__price">$ ${product['price']}</div>

                </div>
            </a>`;
    });
    document.getElementById('menu_list').innerHTML = product_html;
    include("js/slider.js")
});



