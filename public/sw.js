const VERSION = 2;
const cacheName = 'static'
const cacheItems= [
    '/',
    '/logo.webp',
    '/click.ogg',
    '/generic.ogg',
    
]

this.addEventListener('install', event => {
    event.waitUntil(
        caches.open(cacheName).then(cache => {
            cache.addAll(cacheItems)
        })
    )
})


this.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request).then(response => {
            return response || fetch(event.request)
        })
        )
})