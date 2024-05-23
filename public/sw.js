// const VERSION = 1.6;
// const cacheName = 'static'
// const cacheItems = [
//     '/en',
//     '/en/about_us',
//     '/en/store',
//     '/css/about.css',
//     '/css/shop.css',
//     '/css/store.css',
//     '/css/index.css',
//     '/css/app.css',
//     '/js/app.js',
//     '/js/index.js',
//     '/js/shop.js',
//     '/en/contact_us',
//     '/logo.webp',
//     '/click.ogg',
//     '/generic.ogg',

// ]

// this.addEventListener('install', event => {
//     event.waitUntil(
//         caches.open(cacheName).then(cache => {
//             cache.addAll(cacheItems)
//         })
//     )
// })

// if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.ready.then(function (registration) {
//         console.log('service worker updated', registration)
//         registration.update();
//     });
// }

// this.addEventListener('fetch', event => {
//     event.respondWith(
//         caches.match(event.request).then(response => {
//             return response || fetch(event.request)
//         })
//     )
// })