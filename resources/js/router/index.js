window.Vue = require('vue');
// Importaciones
import VueRouter from 'vue-router'
import homeComponent from '../pages/home/homeComponent.vue'
import formComponent from '../pages/form/formComponent.vue'
// asignar
Vue.use(VueRouter)
// rutas
const routes = [
    {
        path: '/',
        name: 'Raiz',
        component: homeComponent,
        props: true
    },
    {
        path: '/home',
        name: 'Home',
        component: homeComponent,
        props: true
    },
    {
        path: '/recursos',
        name: 'Form',
        component: formComponent,
        props: true
    }
]
// instancia
const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})
// exportar objeto
export default router