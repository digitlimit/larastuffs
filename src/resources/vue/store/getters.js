export default {
    token               : (state) => state.token,
    loading             : (state) => state.loading,
    error               : (state) => state.error,
    validation_errors   : (state) => state.validation_errors,
    success             : (state) => state.success,

    meta                : (state) => state.meta,
    user                : (state) => state.user,
    posts               : (state) => state.posts,

    authenticated       : (state) => !!state.token
}
