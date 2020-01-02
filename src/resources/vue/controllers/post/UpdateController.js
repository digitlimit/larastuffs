import {mapState, mapGetters, mapActions} from 'vuex'
import FormFields from '@admin/post/partials/Fields.vue'

export default {
    data: function(){
        return {}
    },
    components:{
        FormFields
    },
    mounted(){
        this.updatePost({url:'http://emeka.com', limit:30});

        // this.$store.commit('setMeta', {
        //     page:{title: 'Updating'}
        // });
    },
    methods:{
        ...mapActions(['updatePost'])
    }
}
