(function() {
  'use strict';

  angular.module('myApp').controller('PlayController', ['$rootScope', '$route', '$scope', '$mdDialog', '$location', 'SessionService', 'FlashService', 'DomainsService', 'PlayService', PlayController]);

  function PlayController($rootScope, $route, $scope, $mdDialog, $location, SessionService, FlashService, DomainsService, PlayService) {
    var play = this;
    play.input = {};
    play.concept = {};

    $rootScope.sideNav.tab = 1;
    $rootScope.sideNav.domain = DomainsService.getDomain();
    PlayService.getPlayedConcepts(DomainsService.getDomain()).then(function (response) {
      $rootScope.sideNav.play = response.data;
      console.log($rootScope.sideNav);
    });

    PlayService.getConcepts(DomainsService.getDomain())
    .then(function (response) {
      play.concept = response.data;
      console.log(play.concept);
    });

    play.addConcept = function() {
      // check if empty or blank
      if(!play.input.associated_concept || /^\s*$/.test(play.input.associated_concept)) {
        return;
      }

      var custom_concept = {
        name: play.input.associated_concept,
        description: "Custom concept added by player",
        image: DomainsService.getDomain().image
      };
      play.input.associated_concept = "";

      var association = {
        associated_concept: custom_concept,
        concept_id: play.concept.id,
        weight: play.concept.associations.length - 1,
      }
      play.concept.associations.push(association);

    };

    play.submit = function (ev) {

      var data = {
        associations: play.concept.associations,
        domain_id: DomainsService.getDomain().id
      };
      PlayService.saveAssociations(data).then(function(response) {
        if(response.data.nomatch != undefined) { // there was no match :(
          // Appending dialog to document.body to cover sidenav in docs app
          // Modal dialogs should fully cover application
          // to prevent interaction outside of dialog
          $mdDialog.show(
            $mdDialog.alert()
              .parent(angular.element(document.querySelector('#content')))
              .clickOutsideToClose(true)
              .title('Information')
              .content(response.data.flash)
              .ariaLabel('Alert Dialog Demo')
              .ok('Got it!')
              .targetEvent(ev)
          ).then(function() {
            $route.reload();
          });

        } else { // there was a match!
          FlashService.clearShow();
          SessionService.set('match_id', response.data.match_id);
          $location.path('/score');
        }
      });
    };

    play.appreciate = function (index, opinion) {
      play.concept.associations[index].associated_concept.appreciations = [{appreciation: opinion}];
    };

    play.playAnotherConcept = function() {
      play.input = {};
      play.concept = {};

      PlayService.getConcepts(DomainsService.getDomain())
      .then(function (response) {
        play.concept = response.data;
        console.log(play.concept);
      });
    };

    play.showConfirm = function(ev) {

  };
  }

})();
