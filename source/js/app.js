window.Vue = require('vue')

Vue.component('product', require('./components/product.vue').default)
Vue.component('products_list', require('./components/products_list.vue').default)

const app = new Vue({
  el: '#app',
})
