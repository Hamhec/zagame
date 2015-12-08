(function() {
  'use strict';

  var app = angular.module('myApp', ['ngMaterial', 'ngAnimate', 'ngRoute', 'ngSanitize']);

  // Handle the routing
  app.config(function($routeProvider, $locationProvider){
    $routeProvider.when('/login',{
      templateUrl:'js/templates/login.html',
      controller:'LoginController as login'
    });

    $routeProvider.when('/register',{
      templateUrl:'js/templates/register.html',
      controller:'RegisterController as register'
    });

    $routeProvider.when('/domains',{
      templateUrl:'js/templates/domain.html',
      controller:'DomainController as domain'
    });

    $routeProvider.otherwise({ redirectTo: '/login' });
  });

  app.config(function($httpProvider) {
    var logsOutUserOn401 = function($location, $q, SessionService, FlashService) {
      var sucess = function() {
        return response;
      };
      var error = function() {
        if(response.status === 401) {
          SessionService.unset('authenticated');
          FlashService.show(response.data.flash);
          $location.path('/login');
          return $q.reject(response);
        } else {
          return $q.reject(response);
        }
      };

      return function(promise) {
        return promise.then(sucess, error);
      }
    }
  });

  // Handle Security
  app.run(function($rootScope, $location, AuthenticationService, FlashService) {
    var routesThatDontRequireAuth = ['/login', '/register'];

    $rootScope.$on('$routeChangeStart', function(event, next, current) {
      if($location.path() !== "" && !_(routesThatDontRequireAuth).contains($location.path()) && !AuthenticationService.isLoggedIn()) {
        $location.path('/login');
        FlashService.show("Please log in to continue.");
      }
    });
  });

})();
