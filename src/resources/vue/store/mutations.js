export default {
    setToken               : (state, token) => { state.token = token },
    setLoading             : (state, loading) => { state.loading = loading},
    setError               : (state, error) => { state.error = error },
    setValidationErrors    : (state, validation_errors) => { state.validation_errors = validation_errors },
    setSuccess             : (state, success) => { state.success = success },
    setUser                : (state, user) => { state.user = user },
    setAuthenticated       : (state, status) => { state.authenticated = status },
    setMeta               : (state, meta) => {
        state.meta              = {...state.meta, ...meta}; //merge

        if(meta.page && meta.page.title){
            document.title       = meta.page.title;
        }

    },

    addPost                : (state, post) => { state.posts.push(post) },

    resetAll               : state => {
        state.token             = null;
        state.error             = null;
        state.user              = [];
        state.posts             = [];
        state.validation_errors = {};
    },

    setBeforeRequestState  : state => {
        state.success           = '';
        state.error             = '';
        state.loading           = '';
        state.validation_errors = {};
    }
}
