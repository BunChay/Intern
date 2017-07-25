var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    var gulp = require('gulp');
    var sass = require('gulp-sass');
    var minifyCss = require('gulp-minify-css');

    gulp.task('bcss', function() {
        mix.sass('main.scss', 'public/css/main.css');
        mix.sass('theme.scss', 'public/css/theme.css');
        mix.sass('vendor.scss', 'public/css/vendor.css');
    });

    gulp.task('styles', function() {
        mix.sass('style.scss', 'public/css/style.css');
        mix.sass('vendors.scss', 'public/css/vendors.css');
    });

});