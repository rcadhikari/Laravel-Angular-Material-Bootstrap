var elixir = require('laravel-elixir');
var gulp = require('gulp');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*
 * Takes all angular related JS and CSS from bower components directory and
 * combines them. Then adds them to public folder. Also combines normalize.css
 * file.
 */
elixir(function (mix) {
    mix.scripts([
            "dist/jquery.js",
            "angular.min.js",
            "angular-animate.min.js",
            //"angular-animate1.js",
            "angular-material.min.js",
            "angular-aria.min.js",
            'angular-messages.min.js',
            "release/angular-ui-router.js",
            "dist/js/bootstrap.min.js"
        ], 'public/js/all-angular.js', 'vendor/bower/components/*/')
        .styles([
            "normalize.css",
            "angular*.min.css",
            "dist/angular-wizard.css",
            "dist/css/bootstrap.min.css"
        ], 'public/css/all-angular.css', 'vendor/bower/components/*/');
});

/* Copy the images directory from the resources directory to public images. */
gulp.src(['resources/assets/images/**/*']).pipe(gulp.dest('public/images'));

/*
 * Take all css and js files from resources/assets directory and combine them to app.js and app.css files
 * and put them in public directory
 */
elixir(function (mix) {

    mix.sass(['app.scss'], './public/css/app.css')
        .sass('admin/admin.scss', './public/css/app-admin.css')
        .version('public/css/app.css'); // For version and cache.

    mix.scripts([
            "*.js",
            "modules/*/*.js"
        ], 'public/js/app.js');

});

/*
require('laravel-elixir-stylus');

elixir.config.sourcemaps = true;

elixir(function(mix) {
    mix.sass(['app.scss'], './public/css/all-app.css')
        .sass('admin.scss', './public/css/all-admin.css')
        .version('public/css/all-app.css');

    mix.sass('./vendor/bower/components/angular-material/angular-material.css', './public/css/all-app.css')
        .sass('admin.scss', './public/css/all-admin.css')
        .version('public/css/all-app.css');

    // Instead, to use less
    // mix.less('app.less');

    //mix.stylus('app.styl');

    // to run minification for production
    // $ gulp --production

    // To change the asset Dir
    // $elixir.config.assetDir = 'app/assets/';

    // mix.babel([
    mix.scripts([
        'general.js',
        'app.js'
    ], './public/js/all-min.js');


    // Mixify all Angular files
    mix.scripts([
        './vendor/bower/components/angular/angular.js',
        './vendor/bower/components/angular-aria/angular-aria.js',
        './vendor/bower/components/angular-animate/angular-animate.js',
        './vendor/bower/components/angular-material/angular-material.js'
    ], './public/js/all-angular.js');

    // To use the phpUnit
    // mix.phpUnit();
    //mix.phpSpec();

    mix.browserSync({ proxy: 'http://lamb'})


}); */
