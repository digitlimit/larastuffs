import {mapState, mapGetters, mapActions} from 'vuex'

export default {
    data: function(){
        return {
        }
    },
    mounted(){
        this.id = this.$route.params.id;
        this.showPost({id:this.id})
    },
    methods:{
        ...mapActions(['showPost'])
    }
}
