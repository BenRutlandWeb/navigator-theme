const mix = require("laravel-mix");
const wpPot = require("wp-pot");
const path = require('path');
require("laravel-mix-imagemin");
require("laravel-mix-clean");

mix.options({ postCss: [require("postcss-import")] })
    .alias({
        '@': path.join(__dirname, 'resources/js')
    })
    .webpackConfig({
        experiments: {
            outputModule: true,
        },
        externalsType: 'module',
        externals: {
            '@wordpress/interactivity': '@wordpress/interactivity',
        },
    })
    .setPublicPath("dist")
    .clean({ dry: !mix.inProduction() })
    .css("resources/css/admin.css", "css")
    .css("resources/css/main.css", "css")
    .js("resources/js/admin.js", "js")
    .js("resources/js/main.js", "js")
    .sourceMaps()
    .version()
    .imagemin({ from: "resources/img", to: "img" })
    .copy("resources/fonts", "dist/fonts");

wpPot({
    destFile: "lang/app.pot",
    domain: "app",
    package: "app",
    src: ["**/*.php", "!vendor/**/*.php", "!navigator/**/*.php"],
});