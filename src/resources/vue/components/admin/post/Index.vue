<template>
    <div class="admin-index-post">
        <!--<vuetable ref="vuetable"-->
                  <!--api-url="https://vuetable.ratiw.net/api/users"-->
                  <!--:fields="['name', 'nickname', 'email', 'gender']"-->
                  <!--data-path=""-->
                  <!--pagination-path=""-->
        <!--&gt;</vuetable>-->
        <video-chat></video-chat>
    </div>
</template>

<script>
    import Vuetable from 'vuetable-2'
    import {mapState, mapGetters, mapActions} from 'vuex'
    import VideoChat from '@vendor/video/components/Video.vue'

    export default {
        data: function(){
            return {}
        },
        components:{
            Vuetable,
            VideoChat
        },
        mounted(){

            // this.indexPost({url:'http://emeka.com', limit:30})
        },
        methods:{
            ...mapActions(['indexPost'])
        }
    }
</script>
