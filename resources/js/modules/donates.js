/*
|-------------------------------------------------------------------------------
| VUEX modules/donates.js
|-------------------------------------------------------------------------------
| The Vuex data store for the donates
*/

import state from './donate/states'
import getters from './donate/getters'
import mutations from './donate/mutations'
import actions from './donate/actions'

export const donates = {
    state,
    actions,
    mutations,
    getters
}