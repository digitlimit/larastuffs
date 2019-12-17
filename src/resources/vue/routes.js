import Vue from "vue"
import VueRouter from "vue-router"

//routes
import landing from "./routes/landing"
import post from "./routes/post"

//import routes
const baseRoutes = [];
const routes = baseRoutes.concat(
    landing,
    post
);

routes.push({
    path: '*',
    name: 'catch.all',
    beforeEnter: function(to, from, next){
        alert('404')
        //console.
        //this.$router.push({name: 'error.404'})

        //next('/error/404')
    }
});

//use plugins
Vue.use(VueRouter);

//define routes
window.router = new VueRouter({
    routes: routes,
    //mode: 'history',
    hash: false
});

//export router
export default router;