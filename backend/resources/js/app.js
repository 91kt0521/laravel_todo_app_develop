/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// import 変数名 from "場所"
import Vue from "vue";
import VueRouter from "vue-router";
import HeaderComponent from "./components/HeaderComponent";
import TaskListComponent from "./components/TaskListComponent";
import TaskShowComponent from "./components/TaskShowComponent";
import TaskCreateComponent from "./components/TaskCreateComponent";

require('./bootstrap');

window.Vue = require('vue').default;

// Vue Routerはルーティングを制御するためのプラグイン
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    // ルーティングが増える場合はここに以下に追加していく
    routes: [
        {
            // pathにアクセスしたらコンポーネントを表示する(ルーティング名はnameに記載したもの)
            path: '/',
            name: 'task',
        },
        {
            // pathにアクセスしたらコンポーネントを表示する(ルーティング名はnameに記載したもの)
            path: '/tasks',
            name: 'task.list',
            component: TaskListComponent,
        },
        {
            path: '/tasks/create',
            name: 'task.create',
            component: TaskCreateComponent,
        },
        {
            path: '/tasks/:taskId',
            name: 'task.show',
            component: TaskShowComponent,
            props: true,
        },
    ]
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);
//Vue.component('header-component', require('./components/HeaderComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

// document.getElementById("test").textContent = '変更します'
