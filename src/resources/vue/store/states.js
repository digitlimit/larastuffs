export default {
    token: localStorage.getItem('token') || '',

    loading: false,
    error: null,
    validation_errors: {},

    user: {},
    posts: []
}