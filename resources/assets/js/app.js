
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.tickit = {
    page: 'tickets-page',
    chatbox: {
        page: 'user-list',
        user: ''
    },
    assigning: false,
    writeback: false,
    writeback_comment: false,
    tickets_page: 'ticket-list',
    ticket_filter: '',
    tickets: [],
    ticket: {
        id: null
    }
};

Vue.component('app', require('./components/Layout/App.vue'));

const app = new Vue({
    el: '#app',
    data: {
        tickit: tickit
    }
});
