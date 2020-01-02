import {mapState, mapGetters, mapActions} from 'vuex'

export default {
    data: function(){
        return {}
    },
    mounted(){
        this.destroyPost({url:'http://emeka.com', limit:30})
    },
    methods:{
        ...mapActions(['destroyPost'])
    }
}
