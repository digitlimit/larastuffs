import Vuetable from 'vuetable-2'
import {mapState, mapGetters, mapActions} from 'vuex'

export default {
    data: function(){
        return {}
    },
    components:{
        Vuetable
    },
    mounted(){

        // this.indexPost({url:'http://emeka.com', limit:30})
    },
    methods:{
        ...mapActions(['indexPost'])
    }
}
