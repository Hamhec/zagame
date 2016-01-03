(function() {
  'use strict';

  angular.module('myApp').factory('MatchService', ['$http', 'SessionService', 'FlashService', MatchService]);

  function MatchService($http, SessionService, FlashService) {

    return {
      get: function() {
        var domains = $http.post('api/matches');
        domains.then(FlashService.clear, FlashService.showError);
        return domains;
      },
      getTotalScore: function() {
        var request = $http.post('api/totalScore', null);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      }
    };
  }
})();
