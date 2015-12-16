(function() {
  'use strict';

  angular.module('myApp').factory('RegistrationService', ['$sanitize', '$http', 'CSRF_TOKEN', 'AuthenticationService', 'FlashService', RegistrationService]);

  function RegistrationService($sanitize, $http, CSRF_TOKEN, AuthenticationService, FlashService) {

    var sanitizeCredentials = function(credentials) {
      return {
        username: $sanitize(credentials.username),
        email: $sanitize(credentials.email),
        password: $sanitize(credentials.password),
        password_confirmation: $sanitize(credentials.password_confirmation),
        birthdate: $sanitize(credentials.birthdate),
        _token: CSRF_TOKEN
      }
    }

    return {
      // Registration function
      register: function(credentials) {
        var register = $http.post('api/auth/register', sanitizeCredentials(credentials));
        register = register.then(AuthenticationService.cacheSession, FlashService.showError);
        register.then(FlashService.clear);
        return register;
      }
    };
  }

})();
