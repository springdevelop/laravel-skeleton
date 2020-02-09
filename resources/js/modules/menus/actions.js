/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/menus.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/menus.js';

export default {
    loadMenus({ commit }) {
        return new Promise((resolve, reject) => {
            API.all()
                .then(resp => {
                    commit('setMenus', resp.data.data)
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
                })
        })
    },

}