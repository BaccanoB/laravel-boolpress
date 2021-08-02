<template>
    
    <div class="container">
        <h1>{{post.title}}</h1>
        <p>{{post.body}}</p>
        <h4 class=" badge badge-primary" v-if="post.category">{{post.category.name}}</h4>
        <div class="h5" v-if="post.tags.length > 0">
            <h4 class="badge badge-warning" v-for="tag in post.tags" :key="`tag-${tag.id}`">{{tag.name}}</h4>
        </div>
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
    a {
        display: block;
    }
</style>
