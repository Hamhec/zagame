(function() {
  'use strict';

  angular.module('myApp').controller('ScoreController', ['$scope', '$location', '$mdDialog', 'SessionService', 'FlashService', 'ScoreService', ScoreController]);

  function ScoreController($scope, $location, $mdDialog, SessionService, FlashService, ScoreService, PlayController) {
    var score = this;

    ScoreService.get(SessionService.get('concept_score'))
    .then(function (response) {
      if(response.data.match == null) { // open match
        score.message = "No opponent found. your answers will be saved, and you will be notifed when an other player challenges them ;) .";
      } else { // closed match
        score.message = "";
        score.matching = response.data.matching;
        score.opponent = response.data.opponent;
        score.user_associations = response.data.user_associations;
        score.opponent_associations = response.data.opponent_associations;
        console.log(score);
      }
    });

    score.playAnotherConcept = function() {
      $location.path('/play');
      $location.path('/play');
    }
  }

})();
