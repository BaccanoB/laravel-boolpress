<template>
    <div class="col-4 my-3 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h3 class="card-title">{{item.title}}</h3>
                
                <span>{{item.excerpt}}</span>
                <router-link :to="{ name: 'single-post', params: { slug: item.slug } }">Leggi</router-link>
            </div>
        </div> 
    </div>
</template>

<script>
export default {
    name:'Card',
    props:{'item': Object }
}
</script>

<style lang='scss' scoped>

</style>