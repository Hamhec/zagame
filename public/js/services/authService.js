(function() {
  'use strict';

  angular.module('myApp').factory('AuthenticationService', ['$sanitize', '$http', 'CSRF_TOKEN', 'SessionService', 'FlashService', AuthenticationService]);

  function AuthenticationService($sanitize, $http, CSRF_TOKEN, SessionService, FlashService) {
    var cacheSession = function() {
      SessionService.set('authenticated', true);
    };
    var uncacheSession = function() {
      SessionService.unset('authenticated');
    };

    var sanitizeCredentials = function(credentials) {
      return {
        username: $sanitize(credentials.username),
        password: $sanitize(credentials.password),
        _token: CSRF_TOKEN
      }
    }

    return {
      // Authentication function
      login: function(credentials) {
        var login = $http.post('api/auth/login', sanitizeCredentials(credentials));
        login.then(cacheSession, FlashService.showError);
        login.then(FlashService.clear);
        return login;
      },
      // Loging out function
      logout: function() {
        uncacheSession();
        var logout = $http.get('api/auth/logout');
        //logout.then(uncacheSession);
        return logout;
      },

      isLoggedIn: function() {
        return SessionService.get('authenticated');
      },
      cacheSession: cacheSession,
      uncacheSession: uncacheSession
    };
  }

})();
