import Vue from "vue"
window.Vue = Vue;

import router from './routes'
import store from './store/index'

window.dd = (data) => console.log(data)

import App from "./App.vue"
import { mapState, mapGetters, mapActions } from 'vuex'

window.app = new Vue({
    el: '#app',
    router: router,
    store: store,
    data: function(){
        return {
            name: 'Larastuffs'
        }
    },
    computed: {
        ...mapState([
            'posts'
        ])
    },
    mounted(){

    },
    render: function(h){
        return h(App)
    }
});
