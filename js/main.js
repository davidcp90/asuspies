require.config({
  waitSeconds: 200,
  paths:{
  'jquery':'../bower_components/jquery/dist/jquery.min',
  'angular':'../bower_components/angular/angular.min',
  'bootstrap':'bootstrap.min',
  'transit':'../bower_components/transit/transit.min',
  'parsley':'../bower_components/parsleyjs/dist/parsley.min',
  'es':'../bower_components/parsleyjs/dist/i18n/es',
  'angularAMD':'../bower_components/angularAMD/angularAMD.min',
  'app': 'mod_asuspies/app',
  'controllers': 'mod_asuspies/controllers',
  'services': 'mod_asuspies/services',
  'init_dom': 'mod_asuspies/init_dom',
  'angular-route': '../bower_components/angular-route/angular-route',
},
shim:{
  'jquery':{
    exports:'jQuery'
  },
  'init_dom':['jquery'],
  'bootstrap':['jquery'],
  'transit':['jquery'],
  'parsley':['jquery'],
  'angular': {
            exports: 'angular',
  },
  'angularAMD':['angular'],
  'controllers': ['angular'],
  'services': ['angular'],
  'angular-route':['angular'],
  'app':['controllers', 'services','angular'],
},
deps:['app','jquery','transit','parsley','bootstrap','init_dom']
});
