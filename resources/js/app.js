import Vue from 'vue'
import vuetify from './vuetify'
import {InertiaApp} from '@inertiajs/inertia-vue'

Vue.use(InertiaApp)

const app = document.getElementById('app')

if(app){
    new Vue({
        vuetify,
        render: h => h(InertiaApp, {
          props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => import(`@/Pages/${name}`).then(module => module.default),
          },
        }),
    }).$mount(app)
}
