<template>
    <form class="sort">
        Сортировать:
        <input class="sort__btn" type="button" value="по возрастанию" @click="sort('Asc')">
        <input class="sort__btn" type="button" value="по убыванию" @click="sort('Desc')">
    </form>
</template>

<script>
    export default {
        name: "sort"
    }
</script>

<style scoped>

</style>