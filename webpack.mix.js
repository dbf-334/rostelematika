let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


// Базовые секции для всех страниц
/*mix.sass('resources/assets/sass/layouts/svg.scss', 'public/css');           //стили иконок
mix.sass('resources/assets/sass/layouts/up_menu.scss', 'public/css');
mix.sass('resources/assets/sass/layouts/head.scss', 'public/css');
mix.sass('resources/assets/sass/layouts/main_menu.scss', 'public/css');
mix.sass('resources/assets/sass/layouts/footer.scss', 'public/css');*/

    mix.sass('resources/assets/sass/pages/inc/sec_portfolio.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_clients.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_steps.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_commerce.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_raskhodi.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_services.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_advantages.scss', 'public/css');
    mix.sass('resources/assets/sass/pages/inc/sec_calculator.scss', 'public/css');


// Стили для модальных окон
mix.sass('resources/assets/sass/modals/modal-base-form.scss', 'public/css');


// Стили для страниц
mix.sass('resources/assets/sass/pages/index.scss', 'public/css');


