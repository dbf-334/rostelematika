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

mix.js('resources/assets/js/sec_calculator.js', 'public/js');   //скрипт калькулятора на странице
mix.js('resources/assets/js/circle_anim.js', 'public/js');      //скрипт круговой анимации для блоков
mix.js('resources/assets/js/widjet_bitrix.js', 'public/js');    //Код вставки Битрикс-виджета для онлайн чата


// Стили для Яндекс карты
mix.sass('resources/assets/sass/pages/inc/sec_yandex_map.scss', 'public/css');

// Стили для секций/блоков страниц
mix.sass('resources/assets/sass/pages/inc/sec_main_slide.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_portfolio.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_reviews.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_clients.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_steps.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_commerce.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_services.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_advantages.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_calculator.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_oborudovanie.scss', 'public/css');
mix.sass('resources/assets/sass/pages/inc/sec_smi_news.scss', 'public/css');


// Стили для модальных окон
mix.sass('resources/assets/sass/modals/modal-base-form.scss', 'public/css');


// Стили для страниц
mix.sass('resources/assets/sass/pages/index.scss', 'public/css');
mix.sass('resources/assets/sass/pages/services.scss', 'public/css');
mix.sass('resources/assets/sass/pages/monitoring-transporta.scss', 'public/css');
mix.sass('resources/assets/sass/pages/kontrol-rasxoda-topliva.scss', 'public/css');
mix.sass('resources/assets/sass/pages/sistemyi-videonablyudeniya-dlya-transporta.scss', 'public/css');
mix.sass('resources/assets/sass/pages/kursoukazateli.scss', 'public/css');
mix.sass('resources/assets/sass/pages/oborudovanie.scss', 'public/css');
mix.sass('resources/assets/sass/pages/obsluzhivanie-sistem.scss', 'public/css');
mix.sass('resources/assets/sass/pages/gruzoviki.scss', 'public/css');
mix.sass('resources/assets/sass/pages/specz-texnika.scss', 'public/css');
mix.sass('resources/assets/sass/pages/toplivozapravshhiki.scss', 'public/css');
mix.sass('resources/assets/sass/pages/traktoryi-i-sx-texnika.scss', 'public/css');
mix.sass('resources/assets/sass/pages/vozdushnyij-transport.scss', 'public/css');
mix.sass('resources/assets/sass/pages/taksi.scss', 'public/css');
mix.sass('resources/assets/sass/pages/poezda.scss', 'public/css');
mix.sass('resources/assets/sass/pages/legkovoj-transport.scss', 'public/css');
mix.sass('resources/assets/sass/pages/kontrol-temperatury-v-refrizheratore.scss', 'public/css');
mix.sass('resources/assets/sass/pages/monitoring-obshchestvennogo-transporta.scss', 'public/css');
mix.sass('resources/assets/sass/pages/monitoring-raboty-musorovozov.scss', 'public/css');
mix.sass('resources/assets/sass/pages/reshenie-dlya-marshrutnogo-transporta.scss', 'public/css');
mix.sass('resources/assets/sass/pages/logisticheskoe-reshenie-logistics.scss', 'public/css');
mix.sass('resources/assets/sass/pages/personalnyii-monitoring.scss', 'public/css');
mix.sass('resources/assets/sass/pages/reshenie-dlya-agrobiznesov.scss', 'public/css');
mix.sass('resources/assets/sass/pages/about.scss', 'public/css');
mix.sass('resources/assets/sass/pages/contacts.scss', 'public/css');
mix.sass('resources/assets/sass/pages/texpodderzhka.scss', 'public/css');
mix.sass('resources/assets/sass/pages/price.scss', 'public/css');
mix.sass('resources/assets/sass/pages/bye.scss', 'public/css');
mix.sass('resources/assets/sass/pages/methods.scss', 'public/css');
mix.sass('resources/assets/sass/pages/delivery.scss', 'public/css');
mix.sass('resources/assets/sass/pages/guarantees.scss', 'public/css');
mix.sass('resources/assets/sass/pages/mobilnyie-prilozheniya.scss', 'public/css');






