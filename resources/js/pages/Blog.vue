<template>
    <div class="container">
        <h1>Blog</h1>
        <div class="row">
            <Card v-for='post in posts' :key='post.id' :item='post'/>
            <div class="text-center mb-4">
                <button class="btn btn-info" v-show="current_page>1" @click="getPosts(current_page-1)">Previous</button>
            </div>
            <div class="text-center mb-4">
                <button class="btn btn-info" :class="(n==current_page)?'btn-primary': 'btn-info'"  v-for="n in last_page" :key="n" @click="getPosts(n)">{{n}}</button>
            </div>
            <div class="text-center mb-4">
                <button class="btn btn-info" v-show="current_page<last_page" @click="getPosts(current_page+1)">Next</button>
            </div>
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
            posts:[],
            current_page:1,
            last_page:1
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
        getPosts:function(page=1){
            axios
         .get(`http://127.0.0.1:8000/api/posts?page=${page}`)
         .then(
            res=> {
                //  console.log(res.data);
                this.posts = res.data.data;

                this.current_page=res.data.current_page;
                this.last_page=res.data.last_page;

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
