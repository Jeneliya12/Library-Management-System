
require('./bootstrap');

window.Vue = require('vue');

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

Vue.component('welcome', require('./components/welcome.vue'));

Vue.component('chats', require('./components/ChatsComponent.vue').default);

import './assets/css/styles.css';
import './assets/css/bootstrap.css';

import welcome from './components/welcome.vue';

const app = new Vue({
    el: '#app',
    components:{welcome}

   });