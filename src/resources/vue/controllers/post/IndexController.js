import Vuetable from 'vuetable-2'
import {mapState, mapGetters, mapActions} from 'vuex'
import Video from '@vendor/video/components/Video.vue'

export default {
    data: function(){
        return {}
    },
    components:{
        Vuetable,
        Video
    },
    mounted(){

        // this.indexPost({url:'http://emeka.com', limit:30})
    },
    methods:{
        ...mapActions(['indexPost'])
    }
}
