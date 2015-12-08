(function() {
  'use strict';

  angular.module('myApp').factory('FlashService', ['$rootScope', FlashService]);

  function FlashService($rootScope) {
    return {
      show: function(message) {
        $rootScope.flash = message;
      },
      clear: function() {
        $rootScope.flash = "";
      }
    };
  }

})();
