<template>  
    <div class="container">
        <Header />
        <main>
            <h1>Blog</h1>
            <div class="row">
                <div class="col-4 my-3 d-flex"
                v-for='post in posts' :key='post.id'>
                    <h3>{{post.title}}</h3>
                    <p>{{post.body}}</p>
                </div>
            </div>
        </main>
        <Footer />
    </div>

    
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';

export default {
    name:'App',
    components: {
        Header,
        Footer
    },
    data(){
        return {
            posts:[]
        }
    },
    created:function(){
        axios
         .get('http://127.0.0.1:8000/api/posts')
         .then(
             res=> {
                 console.log(res.data);
                 this.posts = res.data.posts;
             }
         )
         .catch(
             err=> {
                 console.log();
             }
         );
    }
}
</script>

<style lang="scss" scoped>
    @import '../sass/front.scss';
</style>
