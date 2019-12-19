<template>
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">EditPost</h5>
                <div class="card-body">
                    <form>
                        <form-fields></form-fields>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

        </div>
    </div>
</template>
<script>
    import FormFields from './partials/Fields.vue'

    export default {
        data: function(){
            return {
                id: null
            };
        },
        components:{
            FormFields
        },
        mounted()
        {
            this.id = this.$route.params.id;

            alert(this.id);
        }
    }
</script>