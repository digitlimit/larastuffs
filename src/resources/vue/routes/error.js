import Layout from "../componets/common/layouts/Error.vue"

import Error404 from '../componets/error/404.vue';

export default {
    path: '/error',
    component: Layout,
    children: [
        {
            path : '404',
            name: 'error.404',
            component: Error404
        }
    ]
}