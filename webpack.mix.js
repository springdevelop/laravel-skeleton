const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .webpackConfig({
        resolve: {
            extensions: ['.js', '.vue'],
            alias: {
                '@': __dirname + '/resources'
            }
        }
    })
    .sass('resources/sass/admin/admin.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css');