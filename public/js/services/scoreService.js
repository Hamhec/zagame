(function() {
  'use strict';

  angular.module('myApp').factory('ScoreService', ['$http', '$sanitize', 'FlashService', 'DomainsService', ScoreService]);

  function ScoreService($http, $sanitize, FlashService, DomainsService) {

    return {
      get: function(concept) {
        var match = {
          concept_score: concept,
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
