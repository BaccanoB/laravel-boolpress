<template>
    
    <div class="container">
        <h1>{{post.title}}</h1>
        <p>{{post.body}}</p>
        <router-link :to="{ name: 'blog'}">Torna al Blog</router-link>
    </div>
</template>

<script>
export default {
    name:'SinglePost',
    data: function() {
        return {
            post:null
        }
    },
    created: function(){
        this.getPost(this.$route.params.slug);
    },
    methods: {
        getPost:function(slug) {
            axios
                .get(`http://127.0.0.1:8000/api/posts/${slug}`)
                .then(
                    res=>{
                        this.post=res.data;
                    }
                )
        }
    }
}
</script>

<style scoped>

</style>
