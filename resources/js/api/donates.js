/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    all: () => axios.get(CONFIG.API_URL + '/donates'),
    show: (id) => axios.get(CONFIG.API_URL + '/donates/' + id),
    store: (data) => axios.post(CONFIG.API_URL + '/donates', data),
    update: (id, data) => axios.put(CONFIG.API_URL + '/donates/' + id, data),
    delete: (id) => axios.delete(CONFIG.API_URL + '/donates/' + id)
}