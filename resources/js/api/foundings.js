/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    all: () => axios.get(CONFIG.API_URL + '/foundings'),
    show: (id) => axios.get(CONFIG.API_URL + '/foundings/' + id),
    store: (data) => axios.post(CONFIG.API_URL + '/foundings', data),
    update: (id, data) => axios.put(CONFIG.API_URL + '/foundings/' + id, data),
    delete: (id) => axios.delete(CONFIG.API_URL + '/foundings/' + id)
}