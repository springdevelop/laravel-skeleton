/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/custom-html.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/customhtmls.js';

export default {
    loadCustomhtmls({ commit }) {
        return new Promise((resolve, reject) => {
            API.all()
                .then(resp => {
                    commit('setCustomhtmls', resp.data.data)
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
                })
        })
    },

}