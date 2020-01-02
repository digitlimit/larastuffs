<template>
    <div class="error-404">
        <div class="error-section">
            <!--<img src="" alt="" class="img-fluid">-->
            <div class="error-section-content">

                <h1 class="display-3">Page Not Found</h1>

                <p>
                    The page you are looking for is currently not found
                </p>

                <router-link class="btn btn-secondary btn-lg" :to="{ name: 'admin.dashboard.index'}">
                    <i class="fa fa-fw fa-user-circle"></i> Back to homepage
                </router-link>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Error404',
        data: function()
        {
            return {}
        }
    }
</script>