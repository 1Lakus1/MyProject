<template>
    <form class="sort">
        Сортировать:
        <input class="sort__btn" type="button" value="по возрастанию" @click="$emit('sort', 'ASC')">
        <input class="sort__btn" type="button" value="по убыванию" @click="$emit('sort', 'DESC')">
    </form>
</template>

<script>
    export default {
        name: "sort"
    }
</script>

<style scoped>

</style>