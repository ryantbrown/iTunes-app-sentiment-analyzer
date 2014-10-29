// paths
var assets_dir = 'resources/assets';
var build_dir = assets_dir + '/build';
var less_output = assets_dir + '/css';

// set scripts to combine
var scripts = [
    'vendor/jquery/jquery.js',
    'vendor/bootstrap/js/bootstrap.js',
    'js/main.js'
];

// set styles to combine
// compiled less file should be last
var styles = [
    'css/main.css'
];

// files to version (cache bust)
var version = [
    'css/all.css',
    'js/all.js'
];

// require elixir
var elixir = require('laravel-elixir');

// mix ingredients
elixir(function(mix) {
    mix.routes().events()
        .less('main.less', less_output)
        .styles(styles, assets_dir)
        .scripts(scripts, assets_dir);
});