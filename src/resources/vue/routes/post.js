import Layout from "@components/common/layouts/Default.vue"

import IndexPost from '@components/admin/post/Index.vue';
import ShowPost from '@components/admin/post/Show.vue';
import EditPost from '@components/admin/post/Edit.vue';
import CreatePost from '@components/admin/post/Create.vue';

export default {
    path: '/posts',
    component: Layout,
    meta:{
        id: 'post',
        auth: true,
        nav: {
            open: false,
            icon: 'fa fa-clipboard',
            to: true
        },
        breadcrumb:[
            {
                label: 'Posts',
                route: {name:'admin.post.index'}
            }
        ]
    },
    children: [
        {
            path : '',
            name: 'admin.post.index',
            component: IndexPost,
            meta:{
                icon: 'fa fa-list',
                page:{title: 'List Posts'},
                breadcrumb:[
                    {label: 'Lists', route: null}
                ],
                nav:{label: 'Lists', sidebar:true}
            },
        },
        {
            path : 'create',
            name: 'admin.post.create',
            component: CreatePost,
            meta:{
                icon: 'fa fa-plus-circle',
                page:{title: 'Add New Post'},
                breadcrumb:[
                    {label: 'Add New', route: null}
                ],
                nav:{label: 'Add New', sidebar:true}
            }
        },
        {
            path : 'edit/:id',
            name: 'admin.post.edit',
            component: EditPost,
            meta:{
                icon: 'fa fa-edit',
                page:{title: 'Edit Post'},
                breadcrumb:[
                    {label: 'Edit', route: null}
                ],
                nav:{label: 'Edit Post', sidebar:false}
            }
        },
        {
            path : 'show/:id',
            name: 'admin.post.show',
            component: ShowPost,
            meta:{
                icon: 'fa fa-eye',
                page:{title: 'View Post'},
                breadcrumb:[
                    {label: 'View', route: null}
                ],
                nav:{label: 'View Post', sidebar:false}
            }
        }
    ]
}
