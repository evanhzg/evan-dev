const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/variables.scss', 'public/css')
    .postCss("resources/sass/global.css", "public/css", [
        require("tailwindcss"),
    ]);
