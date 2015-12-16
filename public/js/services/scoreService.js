(function() {
  'use strict';

  angular.module('myApp').factory('ScoreService', ['$http', '$sanitize', 'FlashService', 'DomainsService', ScoreService]);

  function ScoreService($http, $sanitize, FlashService, DomainsService) {

    return {
      get: function(match_id) {
        var match = {
          match_id: match_id,
          domain_id: DomainsService.getDomain().id
        }
        console.log("match:");
        console.log(match);
        var request = $http.post('api/score', match);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      }
    };
  }

})();
