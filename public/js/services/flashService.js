(function() {
  'use strict';

  angular.module('myApp').factory('FlashService', ['$rootScope', FlashService]);

  function FlashService($rootScope) {
    return {
      show: function(message) {
        $rootScope.flash = message;

      },
      clearShow: function() {
        $rootScope.flash = "";
      },
      clear: function() {
        $rootScope.flash = "";
      },
      showError: function(response) {
        $rootScope.flash = response.data.flash;
      }
    };
  }

})();
