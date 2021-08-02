<template>
    <header class="text-center">
        <nav>
            <ul>
                <li>
                  <router-link :to="{ name: 'home' }">Home</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'blog' }">Blog</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'about' }">Chi Siamo</router-link>
                </li>
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

            &.active,
            &:hover {
                background-color: lightblue;
                padding: 5px;
            }
        }
    }
    
</style>
