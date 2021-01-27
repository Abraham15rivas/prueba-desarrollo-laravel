require('./bootstrap');

window.Vue = require('vue');

import store from './store'
import router from './router'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import { MdButton, MdContent, MdTabs } from 'vue-material/dist/components'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

Vue.use(MdButton)
Vue.use(MdContent)
Vue.use(MdTabs)
Vue.use(VueMaterial)

Vue.component('header-vue', require('./components/header/header.vue').default);
Vue.component('footer-vue', require('./components/footer/footer.vue').default);
Vue.component('form-one', require('./components/form/formOne.vue').default);
Vue.component('form-two', require('./components/form/formTwo.vue').default);

const app = new Vue({
    el: '#app',
    router,
    store,
    data: () => ({
        form: 0
    }),
    methods: {
        changeForm(value) {
            this.form = value
        }
    }
});
