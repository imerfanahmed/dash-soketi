/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: "7bf48928e88edf9ef941",
    cluster: 'ap1',
    // wsHost: 'localhost',
    // wsPort: 6001,
    // wssPort: 6001,
    // forceTLS: false,
    // enabledTransports: ['ws'],
});

// console.log('Echo', Echo);

window.Echo.channel('test_channel')
    .listen('test_event', e => {
        console.log(e)
    })
console.log('Listening to test-channel');
