require('./bootstrap');


window.Vue = require("vue").default;
import Vue from "vue";

// Import your component

Vue.component("employees-index", require("./components/Index.vue").default);

const app = new Vue({
    el: '#app',
});
