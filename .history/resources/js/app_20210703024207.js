/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/* =================================== HEADER =================================== */
Vue.component('header-component', require('./components/Header.vue').default);

/* ================================ MAIN CONTENT ================================= */
Vue.component('featured-post', require('./components/FeaturedPost.vue').default);
Vue.component('posts-tab', require('./components/PostsTab.vue').default);
Vue.component('latest-posts', require('./components/LatestPosts.vue').default);
Vue.component('instagram-feed', require('./components/InstagramFeed.vue').default);

/* ==================================== SIDEBAR ================================== */
Vue.component('about', require('./components/sidebar/About.vue').default);
Vue.component('popular-posts', require('./components/sidebar/PopularPosts.vue').default);
Vue.component('categories', require('./components/sidebar/PopularPosts.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
