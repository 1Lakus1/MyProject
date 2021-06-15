<template>
    <form class="sort">
        Сортировать:
        <input class="sort__btn" type="button" value="по возрастанию" @click="$emit('sort', 'Asc')">
        <input class="sort__btn" type="button" value="по убыванию" @click="$emit('sort', 'Desc')">
    </form>
</template>

<script>
    export default {
        name: "sort"
    }
</script>

<style scoped>

</style>