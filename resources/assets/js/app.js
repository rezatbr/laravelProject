
import './bootstrap';
import Header from './components/Header.vue';
import Sidebar from './components/Sidebar.vue';

Vue.component('myHeader', Header);
Vue.component('mySidebar', Sidebar);

const app = new Vue({
    el: '#app'
});
