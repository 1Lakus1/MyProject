<template>
    <ul class="container__paggin">
        <li v-for="n in count" :key="n"> <button @click="$emit('pagging', n)"> {{n}} </button> </li>
    </ul>
</template>
<script>
    export default {
        name: "pagging",
        props: ['productCount', 'productsOnPage'],
        computed:{
            count: function (){
                return Math.ceil(this.productCount / this.productsOnPage, );
            }
        }
    }
</script>

<style scoped>

</style>