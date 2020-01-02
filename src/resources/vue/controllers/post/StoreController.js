import {mapState, mapGetters, mapActions} from 'vuex'
import FormFields from '@components/admin/post/partials/Fields.vue'

export default {
    data: function(){
        return {}
    },
    components:{
        FormFields
    },
    mounted(){
        this.updatePost({url:'http://emeka.com', limit:30})
    },
    methods:{
        ...mapActions(['updatePost'])
    }
}

