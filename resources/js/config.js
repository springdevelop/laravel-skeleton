var api_url = '';
var host = window.location.hostname;
var protocol = window.location.protocol;
api_url = protocol + '//' + host + '/api';

export const CONFIG = {
    API_URL: api_url,
}