(function() {
  'use strict';

  angular.module('myApp').controller('ScoreController', ['$scope', '$location', '$mdDialog', 'SessionService', 'FlashService', 'ScoreService', ScoreController]);

  function ScoreController($scope, $location, $mdDialog, SessionService, FlashService, ScoreService, PlayController) {
    var score = this;

    ScoreService.get(SessionService.get('concept_score'))
    .then(function (response) {
      if(response.data.opponent == null) { // open match
        score.message = "No opponent found. your answers will be saved, and you will be notifed when an other player challenges them ;) .";
        score.match = response.data.match;
        score.opponent = null;
        score.user_associations = response.data.user_associations;
        console.log(score);
      } else { // closed match
        score.match = response.data.match;
        score.matching = response.data.matching;
        score.opponent = response.data.opponent;
        score.user_associations = response.data.user_associations;
        score.opponent_associations = response.data.opponent_associations;
        console.log(score);
      }
    });

    score.showSimilarity = function(association) {
      if(association.opponent_association == null) {
        return "No match found";
      }
      return association.opponent_degree + "% equivalent to " + association.opponent_association.associated_concept.name + ", +" + association.score + "pts";
    };

    score.playAnotherConcept = function() {
      $location.path('/play');
      $location.path('/play');
    };
  }

})();
