(function() {
  'use strict';

  angular.module('myApp').controller('LoginController', ['$location', 'AuthenticationService', LoginController]);

  function LoginController($location, AuthenticationService) {
    var login = this;

    login.data = {};

    login.submit = function() {
      AuthenticationService.login(login.data)
      .then(function(response) { // success
        $location.path('/domains');
        $location.path('/domains');
      });
    }
  }

})();
