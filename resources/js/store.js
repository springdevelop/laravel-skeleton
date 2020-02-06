/*
|-------------------------------------------------------------------------------
| VUEX store.js
|-------------------------------------------------------------------------------
| Builds the data store from all of the modules for the Roast app.
*/
/*
  Adds the promise polyfill for IE 11
*/
require('es6-promise').polyfill();

import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex)

import { donates } from '@/js/modules/donates.js';
import { foundings } from '@/js/modules/foundings.js';


export default new Vuex.Store({
    modules: {
        donates,
        foundings
    }
});