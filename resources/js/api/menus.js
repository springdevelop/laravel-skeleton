/*
    Imports the  API URL from the config.
*/
import { CONFIG } from '../config.js';

export default {
    all: () => axios.get(CONFIG.API_URL + '/menus'),
}