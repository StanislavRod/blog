/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#postList',
    template: require('./templates/postList.html'),
    data() {
        return {
            dataPosts: [],
            isEmpty: false,
            page: 2
        }
    },
    methods: {
        greet: function () {
            axios.get('/lyzzyLoad?page=' + this.page)
                .then(
                    response => {
                        response.data.posts.data.forEach((el) => {
                            this.dataPosts.push(el);
                        });
                        if (response.data.posts.current_page == response.data.posts.last_page || !response.data.posts.data.length ) {
                            this.isEmpty = true;
                        }
                        this.page++;
                    })
                .catch(e => {
                    console.log(e);
                });
        }
    }
});
