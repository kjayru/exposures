require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false
Vue.component('bloque-component', require('./components/BloqueComponent.vue').default);
Vue.component('item-component', require('./components/ItemComponent.vue').default);
Vue.component('contenido-component', require('./components/ContenidoComponent.vue').default);

const app = new Vue({
    el: '#app'
});


