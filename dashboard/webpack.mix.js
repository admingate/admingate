let mix = require('laravel-mix');

const path = require('path');
let directory = path.basename(path.resolve(__dirname));

const source = 'admingate/core/' + directory;
const dist = 'public/vendor/core/core/' + directory;

mix.js(source + '/resources/assets/js/dashboard.js', dist + '/js').vue();

mix.sass(source + '/resources/assets/sass/dashboard.scss', dist + '/css');

if (mix.inProduction()) {
    mix.copy(dist + '/js/dashboard.js', source + '/public/js')
        .copy(dist + '/css/dashboard.css', source + '/public/css');
}
