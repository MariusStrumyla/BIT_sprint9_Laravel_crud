
import { vue } from 'laravel-mix';
import VueStarRating from 'vue-star-rating';

require('./bootstrap');
window.Vue = require('vue');


vue.component('star-rating', VueStarRating);

const app = Vue.createApp({ 
    // Your component code
   })
  app.component('star-rating', VueStarRating.default)
  app.mount('#app')