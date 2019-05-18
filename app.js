/* require('./bootstrap'); */

window.Vue = require('vue');

Vue.component(
  'example-component',
  require('./components/ExampleComponent.vue').default
);

Vue.component(
  'custom-component',
  require('./components/CustomComponent.vue').default
);

const app = new Vue({
  el: '#app'
});
