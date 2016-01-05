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
        $location.path('/domains');
      }, function(response) {
        var message = "";
        if(response.data.username) {
          message += response.data.username ;
        }
        if(response.data.password ) {
          if(message != "") { message += " And "; }
          message += response.data.password;
        }
        if(response.data.email) {
          if(message != "") { message += " And "; }
          message += response.data.email;
        }
        FlashService.show(message);
      });
    }
  }

})();
