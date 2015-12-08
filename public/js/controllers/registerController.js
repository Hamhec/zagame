(function() {
  'use strict';

  angular.module('myApp').controller('RegisterController', ['$location', 'RegistrationService', RegisterController]);

  function RegisterController($location, RegistrationService) {
    var register = this;

    register.data = {};

    register.submit = function() {
      RegistrationService.register(register.data)
      .then(function(response) { // success
        $location.path('/domains');
      });
    }
  }

})();
