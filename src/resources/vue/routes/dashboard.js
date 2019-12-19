import Layout from "../componets/common/layouts/Default.vue"

import Dashboard from '../componets/admin/dashboard/Index.vue';

export default {
    path: '/',
    component: Layout,
    meta:{
        auth: true,
        nav: {
            id: 'dashboard',
            title: 'Dashboard',
            open: false,
            icon: 'icon-home',
            to: true
        }
    },
    children: [
        {
            path : '',
            name: 'admin.dashboard.index',
            component: Dashboard
        }
    ]
}