require('./bootstrap');

window.Vue = require('vue');

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import router from './router'

Vue.use(VueMaterial)

Vue.component('header-vue', require('./components/header/header.vue').default);
Vue.component('footer-vue', require('./components/footer/footer.vue').default);

const app = new Vue({
    el: '#app',
    router
});
