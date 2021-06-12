<template>
    <div>
        <section class="products">
            <product v-for="product in products" :key="product.id"
                     :id=product.id
                     :img=product.imgName
                     :price=product.price
                     :name=product.name
            >

            </product>
        </section>
    </div>
</template>

<script>
    export default {
        name: "products_list",

        props: {
            sort: String
        },
        methods: {
            getProducts: async () => {
                let response = await fetch(`http://myproject.loc/mainapi`, {
                    method: "GET",
                    headers: {
                        'Content-Type': 'application/json'
                    },
                });

                const products = await response.json();
                return products;
            },
            sort: function(direction){
                if(direction === "Asc") {
                    this.products = this.products.sort((product1, product2) => (parseFloat(product1.price) - parseFloat(product2.price)))
                }else{
                    this.products = this.products.sort((product1, product2) => (parseFloat(product2.price) - parseFloat(product1.price)))
                }
                console.log(this.products)
            }
        },
        data() {
            return {
                products: {}
            }
        },
        created() {
            this.getProducts().then((products)=>{
                this.products = products;
            });
        }
    }
</script>

<style scoped>

</style>