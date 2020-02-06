require('./bootstrap')
window.Vue = require('vue')
Vue.prototype.$http = axios

import App from '@/js/views/App'
import store from '@/js/store.js'
import Donut from 'vue-css-donut-chart';
import 'vue-css-donut-chart/dist/vcdonut.css';

Vue.use(Donut);
Vue.use(require('vue-moment'));

const app = new Vue({
    el: '#app',
    store,
    render: h => h(App),
})

export default app