<template>
    <div class="common-layouts-default dashboard-main-wrapper">

        <header-partial></header-partial>

        <sidebar-partial></sidebar-partial>

        <div class="dashboard-wrapper">

            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">

                                <page-title-partial></page-title-partial>

                                <breadcrumb-partial></breadcrumb-partial>

                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">
                        <router-view></router-view>
                    </div>
                </div>
            </div>

            <footer-partial></footer-partial>
        </div>
    </div>
</template>
<script>
    import HeaderPartial from '../partials/Header.vue';
    import SidebarPartial from '../partials/Sidebar.vue';
    import FooterPartial from '../partials/Footer.vue';
    import BreadcrumbPartial from "../partials/Breadcrumb";
    import PageTitlePartial from "../partials/PageTitle";

    import {mapState} from 'vuex';



    export default {
        name: 'CommonLayoutsDefault',
        components: {
            HeaderPartial, SidebarPartial, FooterPartial, BreadcrumbPartial, PageTitlePartial
        },
        data(){
            return {
                active_breadcrumb: 'breadcrumb-link',
                // page_title: 'hahaha'
            }
        },
        computed:{
            ...mapState(['meta'])
        },
        actions:{},
        mounted() {
// dd(this.$router);
        }
    }
</script>
