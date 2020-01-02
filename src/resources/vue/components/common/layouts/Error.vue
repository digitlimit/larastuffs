<template>
    <div class="dashboard-main-wrapper p-0">
        <nav class="navbar navbar-expand dashboard-top-header bg-white">
            <div class="container-fluid">
                <div class="dashboard-nav-brandxx navbar-brand">
                    <a class="dashboard-logo" href="#">
                        Larastuffs
                    </a>
                </div>
            </div>
        </nav>

        <div class="bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                       <router-view></router-view>
                    </div>
                </div>
            </div>

            <div class="bg-white p-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-dark text-center">
                            Copyright © 2019. All rights reserved
                            <a href="https://emekambah.com">Emeka Mbah</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'ErrorLayout'
    }
</script>