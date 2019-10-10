require('./bootstrap');

window.Vue = require('vue');


Vue.component(
    'bloque-component',
    require('./components/BloqueComponent.vue').default
);

Vue.component(
    'tarea-component',
    require('./components/tareaComponent.vue').default
);

const app = new Vue({
    el: '#app'
});
