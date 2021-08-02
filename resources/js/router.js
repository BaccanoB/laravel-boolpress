import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import About from './pages/About';
import Blog from './pages/Blog';

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/',
            component:Home,
            name:'home'
        },  
        {
            path: '/about',
            name: 'about',
            component: About 
         },
         {
            path: '/blog',
            name: 'blog',
            component: Blog 
         }
    ]
});

export default router;