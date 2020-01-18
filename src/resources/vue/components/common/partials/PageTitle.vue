<template>
    <h2 class="pageheader-title">
        <i :class="meta.icon"></i>
        {{meta.page.title}}
    </h2>
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        data(){
            return {}
        },
        computed:{
            ...mapState(['meta'])
        }
    }
</script>
