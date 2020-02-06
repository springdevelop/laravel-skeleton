/*
|-------------------------------------------------------------------------------
| VUEX actions for  modules/donates.js
|-------------------------------------------------------------------------------
| The Vuex data actions for the authentication
*/
import API from '@/js/api/donates.js';

export default {
    loadDonates({ commit }) {
        return new Promise((resolve, reject) => {
            API.all()
                .then(resp => {
                    commit('setDonates', resp.data.data)
                    resolve(resp)
                })
                .catch(err => {
                    reject(err)
                })
        })
    },

}