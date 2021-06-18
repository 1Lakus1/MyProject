<template>
    <div>
        <sort @sort="setSort"></sort>
        <section class="products">
            <product v-for="product in products" :key="product.id"
                     :id=product.id
                     :img=product.imgName
                     :price=product.price
                     :name=product.name
            >
            </product>
        </section>
        <pagging
                :productCount=productCount
                :productsOnPage=productsOnPage
                @pagging = "setPagging"
        >
        </pagging>
    </div>
</template>

<script>
    export default {
        name: "products_list",

        methods: {
            getResponse: async (request) => {
                let response = await fetch(request, {
                    method: "GET",
                    headers: {
                        'Content-Type': 'application/json'
                    },
                });

                const response_decode = await response.json();
                return response_decode;
            },
            getProducts: function () {
                let request = `http://myproject.loc/mainapi`;
                request = request + "?sort=" + this.sort;
                if(this.productsOnPage !== 0){
                    request = request + "&count=" + this.productsOnPage + "&pagging=" + this.pagging;
                    console.log(request);
                }

                this.getResponse(request).then((products) => {
                    this.products = products;
                });
            },
            getProductCount: function () {
                this.getResponse(`http://myproject.loc/mainapi/count`).then((count_response) => {
                   this.productCount = count_response;
                });
            },
            setSort: function (direction) {
                if(direction === 'ASC'){
                    this.sort = 1;
                    return this.getProducts();
                }
                if(direction === 'DESC'){
                    this.sort = 2;
                    return this.getProducts();
                }
            },
            setPagging: function (pagging){
                this.pagging = pagging -1;
                return this.getProducts();
            }
        },
        data() {
            return {
                products: {},
                productCount: null,
                productsOnPage: 2,
                sort: 0,
                pagging: 0
            }
        },
        created() {
            this.getProducts();
            this.getProductCount();
        }
    }
</script>

<style scoped>

</style>