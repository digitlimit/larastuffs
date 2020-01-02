<template>
    <div class="common-layouts-default dashboard-main-wrapper">

        <HeaderPartial></HeaderPartial>

        <SidebarPartial></SidebarPartial>

        <div class="dashboard-wrapper">

            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">

                                <h2 class="pageheader-title">
                                    <i :class="meta.icon"></i>
                                    {{meta.page.title}}
                                </h2>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li v-for="(bread, index) in meta.breadcrumb"

                                                :class="[index+1 == meta.breadcrumb.length ?
                                                'breadcrumb-item active' : 'breadcrumb-item']">

                                                <router-link v-if="index+1 != meta.breadcrumb.length"
                                                   class="breadcrumb-link"
                                                :to="{ name: bread.route }">
                                                    {{bread.label}}
                                                </router-link>

                                                {{index+1 == meta.breadcrumb.length ? bread.label : ''}}


                                            </li>
                                        </ol>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">
                        <router-view></router-view>
                    </div>
                </div>
            </div>

            <FooterPartial></FooterPartial>
        </div>
    </div>
</template>
<script>
    import HeaderPartial from '../partials/Header.vue';
    import SidebarPartial from '../partials/Sidebar.vue';
    import FooterPartial from '../partials/Footer.vue';
    import {mapState} from 'vuex';

    export default {
        name: 'CommonLayoutsDefault',
        components: {
            HeaderPartial, SidebarPartial, FooterPartial
        },
        data(){
            return {
                active_breadcrumb: 'breadcrumb-link'
            }
        },
        computed:{
            ...mapState(['meta'])
        },
        actions:{},
        mounted() {
dd(this.$router);
        }
    }
</script>
