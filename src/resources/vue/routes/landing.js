import Layout from "../componets/common/layouts/Default.vue"

import IndexLanding from '../componets/landing/Index.vue';
import AboutLanding from '../componets/landing/About.vue';
import ContactLanding from '../componets/landing/Contact.vue';

export default {
    path: '/',
    name: 'home',
    component: Layout,
    meta:{
        auth: true,
        nav: {
            id: 'post',
            title: 'Posts',
            open: false,
            icon: 'metismenu-icon pe-7s-diamond',
            to: true,
            items: [
                {
                    title: 'Posts',
                    name: 'admin.post.index',
                    path: '/admin/post'
                }
            ]
        }
    },
    children: [
        {
            path : '',
            name: 'admin.landing.index',
            component: IndexLanding
        },
        {
            path : 'contact',
            name: 'admin.landing.contact',
            component: ContactLanding
        },
        {
            path : 'about',
            name: 'admin.landing.about',
            component: AboutLanding
        }
    ]
}