import Vue from "vue"
import VueRouter from "vue-router"
import {mapState, mapGetters, mapActions} from "vuex"
import store from './store/index'

//routes
import dashboard from "./routes/dashboard"
import post from "./routes/post"
import error from "./routes/error"
import catch_all from "./routes/catch_all"

//import routes
const baseRoutes = [];
const routes = baseRoutes.concat(
    dashboard,
    post,
    error,
    catch_all
);

//use plugins
Vue.use(VueRouter);

//define routes
window.router = new VueRouter({
    routes: routes,
    mode: 'history',
    base: document.head.querySelector('meta[name="base-path"]').content
});

router.beforeEach((to, from, next) => {

    // const states = {
    //     ...mapState(['page'])
    // };
    // console.log(states);
    // console.log(to.matched[0].meta);

    //set meta
    if(typeof to.meta != 'undefined'){

        //we store breadcrumbs here
        let breadcrumbs = [];

        //we are collating all breadcrumb in parent route
        if(to.matched.length > 1 && to.matched[0].meta && to.matched[0].meta.breadcrumb){
            for(var i=0; i < to.matched[0].meta.breadcrumb.length; i++) {
                breadcrumbs.push(to.matched[0].meta.breadcrumb[i]);
            }

            // console.log(to.matched[0].meta.breadcrumb[i]);
        }

        //we are collating all breadcrumb in current route
        if(to.meta && to.meta.breadcrumb){
            for(var i=0; i < to.meta.breadcrumb.length; i++) {
                breadcrumbs.push(to.meta.breadcrumb[i]);
            }
            // console.log(to.meta.breadcrumb[i])
        }

        //we re-assign to current route breadcrumb, what we achieved is having parent
        //breadcrumb first before child breadcrumb example Posts > Create
        to.meta.breadcrumb = {...breadcrumbs};

        //commit to store
        store.commit('setMeta', to.meta);
    }

   // get login token from the localStorage
   const token = localStorage.getItem('token');

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

    next()
});

//export router
export default router;
