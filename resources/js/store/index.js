window.Vue = require('vue');

import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state:{
        formState: 0,
    },
    mutations:{
        changeForm(state, payload) {
            state.formState += payload
        }
    },
    actions:{

    },
    modules:{

    }
})