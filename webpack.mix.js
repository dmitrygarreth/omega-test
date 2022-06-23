let mix = require('laravel-mix');

// Path
const resources_path = './wp-content/themes/twentynineteen/';

// css resources
mix.setPublicPath(resources_path + 'dist');

// Автоподмена пути к ресурсам в cSS
mix.setResourceRoot('/wp-content/themes/twentynineteen/dist');

// Mask - @import "blocks/**/*.scss"
mix.webpackConfig({ module: { rules: [ { test: /\.scss$/, loader: 'import-glob-loader' }, ] } });

// JS
mix.js(resources_path + 'js/index.js', resources_path + 'dist').autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
})

// SASS
.sass(resources_path + 'sass/style.scss', resources_path + 'dist')

// Generate sourceMaps
.sourceMaps(true,'source-map')
