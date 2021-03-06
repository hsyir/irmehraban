/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('monthly-children-support', require('./components/MontlyChildrenSupport.vue').default);
Vue.component('Affiliate', require('./components/Share/Affiliate').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


function deferVideo() {
    //defer html5 video loading
    $("video source").each(function () {
        var sourceFile = $(this).attr("data-src");
        $(this).attr("src", sourceFile);
        var video = this.parentElement;
        video.load();
        // uncomment if video is not autoplay
        //video.play();
    });

}

window.onload = deferVideo;

require("./../notifyjs/notify.min")


require("./Store/storeManager");


window.Vivus = require("vivus");
$(document).ready(function () {
    new Vivus('my-svg', {duration: 200});
})


window.Swal = require("sweetalert2");


import WOW from 'wow.js';

new WOW().init();


$(document).ready(function () {
    setTimeout(t => {
        $("#loader").hide();
    }, 1000)
});

$(document).ready(function () {
    $("a.coming-soon").click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: "به زودی!",
            text: "این بخش به زودی راه اندازی خواهد شد.",
            confirmButtonText: "بسیار خب",
            icon: "info"
        })
    })
})


function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

$(document).ready(function () {

    if (getParameterByName("firstLogin")=="true"){
        Swal.fire({
            title: "خوش آمدید",
            text: "کاربر گرامی، ثبت نام شما کامل شد، به وب سایت اکرام کاشمر خوش آمدید.",
            confirmButtonText:"بسیار خب",
            icon: "success"
        })
    }
})
