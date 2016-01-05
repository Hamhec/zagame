(function() {
  'use strict';

  angular.module('myApp').controller('RegisterController', ['$location', 'RegistrationService', 'FlashService', RegisterController]);

  function RegisterController($location, RegistrationService, FlashService) {
    var register = this;

    FlashService.clear();

    register.data = {};

    register.submit = function() {
      RegistrationService.register(register.data)
      .then(function(response) { // success
        if(response.data.password ) {
          FlashService.show(response.data.password);
        } else if(response.data.email) {
          FlashService.show(response.data.email);
        }
        $location.path('/domains');
      });
    }
  }

})();
