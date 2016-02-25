var elixir = require('laravel-elixir');

assets = {
   css: {
      files: ['global.css', 'bootstrap.min.css'],
      from: 'public/css',
      to:   'public/build/css/all.css'
   },
   js:{
      vendor: {
           files: [
                   //'angular.js',
                   'angular-ui-router.min.js',
                   'angular-route.min.js',
                   'angular-animate.min.js'
                  ],
           from: 'public/js/vendors',
           to:   'public/build/js/vendors.min.js'
      },
      scripts: {
           files: [
                    'app.js',
                    'auth.js'
                   ],
           from:  'public/js',
           to:    'public/build/js/scripts.js'
      },
      controllers:{
           files: ['UserController.js'],
           from:  'public/js/controllers',
           to:    'public/build/js/controllers.js'
      },
      services:{
           files:  [],
           from:   'public/js/services',
           to:     'public/build/js/services.js'
      }

   }
}
elixir(function(mix) {
    mix.sass('app.scss')
       .copy('bower_components/angular/angular.js', 'public/js/vendors/angular.js')
       .copy('bower_components/angular-route/angular-route.min.js', 'public/js/vendors/angular-route.min.js')
       .copy('bower_components/angular-ui-router/release/angular-ui-router.min.js', 'public/js/vendors/angular-ui-router.min.js')
       .copy('bower_components/angular-animate/angular-animate.min.js', 'public/js/vendors/angular-animate.min.js')
       .styles(assets.css.files, assets.css.to, assets.css.from)
       .styles(assets.js.vendor.files, assets.js.vendor.to, assets.js.vendor.from)
       .styles(assets.js.scripts.files, assets.js.scripts.to, assets.js.scripts.from)
       .styles(assets.js.controllers.files, assets.js.controllers.to, assets.js.controllers.from)
       //.styles(assets.js.services.files, assets.js.services.to, assets.js.services.from);
});
