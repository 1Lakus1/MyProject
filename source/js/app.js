window.Vue = require('vue')


Vue.component('products_list', require('./components/products_list.vue').default)
Vue.component('product', require('./components/product.vue').default)
Vue.component('sort', require('./components/sort.vue').default)
Vue.component('pagging', require('./components/pagging.vue').default)


const app = new Vue({
  el: '#app',
})
