<template>
    <div class="container">
        <h1>{{title}}</h1>
    </div>
</template>

<script>

export default {
    name:'WorkInProgress',
    props : ['title']
}
</script>

<style lang='scss' scoped>
    h1 {
        color: red;
    }
</style>
