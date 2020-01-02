import Layout from "../components/common/layouts/Error.vue"

import Error404 from '../components/error/404.vue';

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
