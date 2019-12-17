import Layout from "../componets/common/layouts/Default.vue"

import IndexPost from '../componets/admin/post/Index.vue';
import ShowPost from '../componets/admin/post/Show.vue';
import EditPost from '../componets/admin/post/Edit.vue';
import CreatePost from '../componets/admin/post/Create.vue';

export default {
    path: '/posts',
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
            name: 'admin.post.index',
            component: IndexPost
        },
        {
            path : '/create',
            name: 'admin.post.create',
            component: CreatePost
        }
    ]
}