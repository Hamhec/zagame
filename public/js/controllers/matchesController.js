(function() {
  'use strict';

  angular.module('myApp').controller('MatchesController', ['$rootScope', '$location', 'MatchService', MatchesController]);

  function MatchesController($rootScope, $location, MatchService) {
    var matches = this;

    MatchService.get().then(function(response) {
        matches.data = response.data;
        console.log("matches:");
        console.log(matches.data);
    });

    matches.select = function(match) {
      SessionService.set('concept_score', match.concept_id);
      $location.path('/score');
      $route.reload();
    }
  }

})();
