const mix = require('laravel-mix');

const path = require('path');
const directory = path.basename(path.resolve(__dirname));
const source = `platform/plugins/${directory}`;
const dist = `public/vendor/core/plugins/${directory}`;

mix.js(`${source}/resources/js/size-guide-admin.js`, `${dist}/js`)
    .js(`${source}/resources/js/size-guide-frontend.js`, `${dist}/js`)
    .sass(`${source}/resources/sass/size-guide-admin.scss`, `${dist}/css`)
    .sass(`${source}/resources/sass/size-guide-frontend.scss`, `${dist}/css`);

if (mix.inProduction()) {
    mix.copy(`${dist}/js/size-guide-admin.js`, `${source}/public/js`);
    mix.copy(`${dist}/js/size-guide-frontend.js`, `${source}/public/js`);
    mix.copy(`${dist}/css/size-guide-admin.css`, `${source}/public/css`);
    mix.copy(`${dist}/css/size-guide-frontend.css`, `${source}/public/css`);
}
