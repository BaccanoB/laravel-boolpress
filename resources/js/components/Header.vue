<template>
    <header class="text-center">
        <nav>
            <ul>
                <li>Home</li>
                <li>Blog</li>
                <li>Chi Siamo</li>
            </ul>
        </nav>
    </header>
</template>

<script>

export default {
    name:'Header'
}

</script>

<style lang='scss' scoped>
    
    li {
        list-style: none;
        display: inline-block;
        padding: 10px;

        a {
            text-decoration: none;
        }
    }
    
</style>
