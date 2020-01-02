import axios from 'axios';

axios.interceptors.request.use(
    (config) => {
        const token = localStorage.getItem('token');
        config.headers.common['Accept'] = 'application/json';
        config.headers.common['Authorization'] = `Bearer ${ token }`;

        return config;
    },
    (error) => {
        console.log(error.response)
        return Promise.reject(error);
    }
);

axios.interceptors.response.use(function (response) {

    console.log(response)//TODO

    return response;

}, function (error) {
    console.log(error) //TODO

    let status = error.response.status;

    switch(status)
    {
        case 401:
            //TODO this a temporal fix. we need to do token refresh
            localStorage.removeItem('token')
            window.Vue.$router.push({ name: 'auth.login'})
            break;

        case 422:
            //see handleError
            break;

        case 404: //error.404.vue
        case 501: //error.501.vue
            window.Vue.$router.push({ name: `error.${status}`});
            break;
    }

    console.log(error.response.data)//TODO
    return Promise.reject(error);
});

axios.defaults.baseURL = document
        .querySelector('meta[name="base-url"]')
        .content + '/api/v1';

axios.handleError = ({commit}, error) => {

    let message = error.response.data.message || error.message;

    switch(error.response.status)
    {
        case 401:
            message = 'Invalid Authentication Credentials'
            break;

        case 422:
            if(error.response.data && error.response.data.errors){
                commit('setValidationErrors', error.response.data.errors);
            }
            break;

    }

    commit('setError', message);
};

export default {
    //posts
    //------------------------------------------------------------------------------------------
    indexPost({commit}, {url, limit})
    {
        alert(url)
        //alert(url);
        //alert(limit);
        //
        // try {
        //     commit('setBeforeRequestState');
        //
        //     //make request and await for response
        //     const res = await axios.get('guest/hotel/1');
        //
        //     const hotel = res.data.data;
        //
        //     commit('setLoading', false);
        //     commit('setHotel', hotel);
        //
        //     return hotel;
        //
        // } catch (error) {
        //     axios.handleError({commit}, error)
        // } finally {
        //     commit('setLoading', false);
        // }

    },
    filterPost({commit}, {filter}) {

    },
    showPost({commit}, {id}) {

    },
    updatePost({commit}, {post}) {

    },
    storePost({commit}, {post}) {
        console.log(post)
    },
    destroyPost({commit}, {id}) {

    }
    //stop - posts
    //------------------------------------------------------------------------------------------

}
