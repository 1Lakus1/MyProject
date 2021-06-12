<template>
    <article class = "product">
        <a :href = "'product?id='+id">
            <div class = "product__wrapper">
                <div class ="product__imgWrapper">
                    <img class = "product__img" :src = "'/src/images/'+img">
                    <div class = "product__cost">{{price}}</div>
                </div>
                <p class = "product__name">{{name}}</p>
            </div>
        </a>
    </article>
</template>

<script>
    export default {
        name: "product",
        props: {
            id: {
                type: Number,
                require: true
            },
            img: {
                type: String,
                require: true
            },
            price: {
                type: String,
                require: true
            },
            name: {
                type: String,
                require: true
            },
        }

    }
</script>

<style scoped>

</style>