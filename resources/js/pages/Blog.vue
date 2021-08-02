<template>
    <div class="container">
        <h1>Blog</h1>
        <div class="row">
            <Card v-for='post in posts' :key='post.id' :item='post'/>
        </div>
    </div>
</template>

<script>
import Card from '../components/Card.vue';
export default {
    name:'Blog',
    components: {
        Card
    },
    data(){
        return {
            posts:[]
        }
    },
    methods:{
        reducedText:function(text,charsNumber=100) {
            // console.log(text.length);
            if(text.length > charsNumber) {
                
                return text.substr(0,charsNumber) + '...';

            } else {
                return text;
            }
        },
        getPosts:function(){
            axios
         .get('http://127.0.0.1:8000/api/posts')
         .then(
            res=> {
                //  console.log(res.data);
                this.posts = res.data.posts;

                this.posts.forEach(
                    element=> {
                        
                        element.excerpt =this.reducedText(element.body,150)
                    }
                )
            }
        )
         .catch(
            err=> {
                console.log(err);
            }
          );
        }
    },
    created:function(){
        this.getPosts();
    }
}
</script>

<style scoped>

</style>
