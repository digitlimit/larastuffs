import Vue from "vue"
window.Vue = Vue;

//import '../../../../../../public/vendors/digitlimit/larastuffs/assets/css/shared.css'

import './routes'
window.router = router;

////components
import App from "./App.vue"

window.app = new Vue({
    el: '#app',
    router: router,
    data: function(){
        return {
            name: 'Larastuffs'
        }
    },
    mounted: function(){

    },
    render: function(h){
        return h(App)
    }
});