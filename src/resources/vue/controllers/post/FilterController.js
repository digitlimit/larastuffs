import {mapState, mapGetters, mapActions} from 'vuex'

export default {
    data: function(){
        return {}
    },
    mounted(){
        this.filterPost({url:'http://emeka.com', limit:30})
    },
    methods:{
        ...mapActions(['filterPost'])
    }
}
