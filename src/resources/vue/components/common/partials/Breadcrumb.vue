<template>
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
</template>

<script>
    import {mapState} from 'vuex';

    export default {
        data(){
            return {
                active_breadcrumb: 'breadcrumb-link'
            }
        },
        computed:{
            ...mapState(['meta'])
        }
    }
</script>
