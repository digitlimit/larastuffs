<template>
    <div class="admin-show-post">
        Show {{id}}
    </div>
</template>

<script>
    export default {
        data(){
            return {
                id: null
            }
        },

        mounted(){
            this.id = this.$route.params.id;
        }
    }
</script>