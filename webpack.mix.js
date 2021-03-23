const path = require('path');
const mix = require('laravel-mix')
// const tailwindcss = require('tailwindcss')

const production = process.env.NODE_ENV === 'production'
const sourceMap = production ? false : 'inline-source-map'

mix.setPublicPath('public')
    .js('resources/js/quotes.js', 'js')
    .vue()
    .sass('resources/scss/quotes.scss', 'css', { implementation: require('node-sass') })
    .version()
    .webpackConfig({
        devtool: sourceMap,
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources/js/'),
            },
        },
        output: {
            publicPath: '/vendor/quotes/',
            chunkFilename: 'js/chunks/[name].js'
        }
    })
    .options({
        processCssUrls: false,
        postCss: [
            // tailwindcss('./resources/tailwind.js')
        ]
    })
    .copy('resources/img', 'public/img')