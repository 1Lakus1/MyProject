const getProducts = async () =>{
    response = await fetch(`http://myproject.loc/MainApi`, {
        method: "GET",
        headers: {
            'Content-Type': 'application/json'
        },
    });

    const products = await response.json();
    return products;
}

getProducts().then((products)=>{
    products.forEach(product => {
        document.getElementById('menu_list').innerHTML += `<a class="product" href = "#">
                <img src="src/images/${product['imgName']}" alt="" class="product__img">
                <div class="product__info">
                    <div class="product__name"> Bike First</div>
                    <div class="product__price"> 300$</div>

                </div>
            </a>`;
    });
});



