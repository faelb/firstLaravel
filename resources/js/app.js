require('./bootstrap');

import Vue from 'vue'


//Main pages
import App from './views/App'


const app = new Vue({
    el: '#app',
    components: { App }
});
