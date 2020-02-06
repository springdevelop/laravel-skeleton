/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/donates.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/foundings.js';

export default {
    loadFoundings({ commit }) {
        return new Promise((resolve, reject) => {
            API.all()
                .then(resp => {
                    commit('setFoundings', resp.data.data)
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
                })
        })
    },

}