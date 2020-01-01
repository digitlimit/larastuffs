import Vue from "vue"
import VueRouter from "vue-router"

//routes
import dashboard from "./routes/dashboard"
import post from "./routes/post"
import error from "./routes/error"

//import routes
const baseRoutes = [];
const routes = baseRoutes.concat(
    dashboard,
    post,
    error
);

routes.push({
    path: '*',
    name: 'catch.all',
    beforeEnter: function(to, from, next){
        console.log(to)
        //this.$router.push({name: 'error.404'});
        next('/error/404')
    }
});

//use plugins
Vue.use(VueRouter);

//define routes
window.router = new VueRouter({
    routes: routes,
    //mode: 'history'
    //base: process.env.BASE_URL
});

//router.beforeEach((to, from, next) => {
//
//    //set page title:
//    //document.title = to.meta.title;
//    //console.log(to.meta)
//
//    // get login token from the localStorage
//    const token = localStorage.getItem('token');
//
//    if (to.matched.some(m => m.meta.auth) && !token) {
//        alert('login')
//        //if going to auth route and token is empty
//        //redirect to login page
//        next('/auth/login')
//    }else if (to.matched.some(m => m.meta.guest) && token){
//        alert('already auth')
//        //if going to guest route and token already exist
//        //redirect to hotel detail page
//        next('/')
//    } else {
//        next()
//    }
//});

//export router
export default router;