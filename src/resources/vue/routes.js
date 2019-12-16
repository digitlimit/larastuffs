import Vue from "vue"
import VueRouter from "vue-router"

//routes
import landing from "./routes/landing"

//import routes
const baseRoutes = [];
const routes = baseRoutes.concat(
    landing
);

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