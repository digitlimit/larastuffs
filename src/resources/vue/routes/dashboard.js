import Layout from "../components/common/layouts/Default.vue"

import Dashboard from '../components/admin/dashboard/Index.vue';

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
