import Layout from "../componets/common/layouts/Default.vue"

export default {
    path: '/',
    name: 'landing',
    component: Layout,
    meta:{
        auth: false
    },
    children: [
        {
            path : 'contact',
            name: 'Contact'
        },
        {
            path : 'about',
            name: 'About'
        },
        {
            path : 'how-it-works',
            name: 'How it works'
        }
    ]
}