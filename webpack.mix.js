const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();



// const MinifyHtmlWebpackPlugin = require('minify-html-webpack-plugin');
// const mix = require('laravel-mix');
//
// mix.webpackConfig({
//     plugins: [
//         new MinifyHtmlWebpackPlugin({
//             afterBuild: true,
//             src: './storage/framework/views',
//             dest: './storage/framework/views',
//             ignoreFileNameRegex: /\.(gitignore|php)$/,
//             ignoreFileContentsRegex: /(<\?xml version)|(mail::message)/,
//             rules: {
//                 collapseBooleanAttributes: true,
//                 collapseWhitespace: true,
//                 removeAttributeQuotes: true,
//                 removeComments: true,
//                 minifyJS: true,
//             }
//         })
//     ]
// });
