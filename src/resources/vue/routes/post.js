import Layout from "../componets/common/layouts/Default.vue"

import IndexPost from '../componets/admin/post/Index.vue';
import ShowPost from '../componets/admin/post/Show.vue';
import EditPost from '../componets/admin/post/Edit.vue';
import CreatePost from '../componets/admin/post/Create.vue';

export default {
    path: '/posts',
    component: Layout,
    children: [
        {
            path : '',
            name: 'admin.post.index',
            component: IndexPost
        },
        {
            path : 'create',
            name: 'admin.post.create',
            component: CreatePost
        },
        {
            path : 'edit/:id',
            name: 'admin.post.edit',
            component: EditPost
        },
        {
            path : 'show/:id',
            name: 'admin.post.show',
            component: ShowPost
        }
    ]
}