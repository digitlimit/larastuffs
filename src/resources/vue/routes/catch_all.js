export default {
    path: '*',
    name: 'catch.all',
    beforeEnter: function (to, from, next) {
        next('/error/404')
    }
}
