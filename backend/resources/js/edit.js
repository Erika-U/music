/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import VueRouter from 'vue-router';
import HeaderComponent from "./components/HeaderComponent";
import ArtistListComponent from "./components/ArtistListComponent";
import SongListComponent from "./components/SongListComponent";
import TagListComponent from "./components/TagListComponent";
import ArtistShowComponent from "./components/ArtistShowComponent";
import SongShowComponent from "./components/SongShowComponent";
import TagShowComponent from "./components/TagShowComponent";
import ArtistCreateComponent from "./components/ArtistCreateComponent";
import SongCreateComponent from "./components/SongCreateComponent";
import TagCreateComponent from "./components/TagCreateComponent";
import ArtistEditComponent from "./components/ArtistEditComponent";
import SongEditComponent from "./components/SongEditComponent";
import TagEditComponent from "./components/TagEditComponent";

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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 Vue.use(VueRouter);
 
 const router = new VueRouter({
     mode: 'history',
     routes: [
         {
             path: '/edit/artists',
             name: 'artist.list',
             component: ArtistListComponent
         },
         {
            path: '/edit/songs',
            name: 'song.list',
            component: SongListComponent
        },
        {
            path: '/edit/tags',
            name: 'tag.list',
            component: TagListComponent
        },
        {
            path: '/edit/artists/:artistId',
            name: 'artist.show',
            component: ArtistShowComponent,
            props: true
        },
        {
            path: '/edit/songs/:songId',
            name: 'song.show',
            component: SongShowComponent,
            props: true
        },
        {
            path: '/edit/tags/:tagId',
            name: 'tag.show',
            component: TagShowComponent,
            props: true
        },
        {
            path: '/artists/create',
            name: 'artist.create',
            component: ArtistCreateComponent
        },
        {
            path: '/songs/create',
            name: 'song.create',
            component: SongCreateComponent
        },
        {
            path: '/tags/create',
            name: 'tag.create',
            component: TagCreateComponent
        },
        {
            path: '/artists/edit',
            name: 'artist.edit',
            component: ArtistEditComponent
        },
        {
            path: '/songs/edit',
            name: 'song.edit',
            component: SongEditComponent
        },
        {
            path: '/tags/edit',
            name: 'tag.edit',
            component: TagEditComponent
        },
     ]
 });


const app = new Vue({
    el: '#edit',
    router
});
