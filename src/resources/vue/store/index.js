import Vue from 'vue'
import Vuex from 'vuex'
import VuexPersistence from 'vuex-persist'

//vuex
import states from './states'
import getters from './getters'
import mutations from './mutations'
import actions from './actions'

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production'
const vuexLocal = new VuexPersistence({
    storage: window.localStorage
});

//const myPlugin = store => {
//    // called when the store is initialized
//    store.subscribe((mutation, state) => {
//        // called after every mutation.
//        // The mutation comes in the format of `{ type, payload }`.
//        alert(7);
//    })
//}

export default new Vuex.Store({
    state: states,
    getters: getters,
    mutations: mutations,
    actions: actions,
    plugins: [vuexLocal.plugin],
    strict: debug
});