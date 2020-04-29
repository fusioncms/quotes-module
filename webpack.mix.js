let mix = require('laravel-mix')
let tailwindcss = require('tailwindcss')

mix.setPublicPath('public')
    .js('resources/js/quotes.js', 'public/js')
    .sass('resources/scss/quotes.scss', 'public/css', { implementation: require('node-sass') })
    .version()
    .options({
        processCssUrls: false,
        postCss: [
            // tailwindcss('../../../fusion/resources/tailwind.js')
        ]
    })