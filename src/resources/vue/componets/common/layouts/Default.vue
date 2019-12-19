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
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">preccc text</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="#" class="breadcrumb-link">
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">
                                                E-Commerce Dashboard Template
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

    export default {
        name: 'CommonLayoutsDefault',
        components: {
            HeaderPartial, SidebarPartial, FooterPartial
        }
    }
</script>