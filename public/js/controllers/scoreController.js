(function() {
  'use strict';

  angular.module('myApp').controller('ScoreController', ['$scope', '$location', 'SessionService', 'FlashService', 'ScoreService', ScoreController]);

  function ScoreController($scope, $location, SessionService, FlashService, ScoreService, PlayController) {
    var score = this;

    ScoreService.get(SessionService.get('match_id'))
    .then(function (response) {
      score.matching = response.data.matching;
      score.opponent = response.data.opponent;
      score.user_associations = response.data.user_associations;
      score.opponent_associations = response.data.opponent_associations;
      console.log(score);
    });

    score.playAnotherConcept = function() {
      $location.path('/play');
      $location.path('/play');
    }
  }

})();
