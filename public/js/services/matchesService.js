(function() {
  'use strict';

  angular.module('myApp').factory('MatcheService', ['$http', 'SessionService', 'FlashService', MatchService]);

  function MatchService($http, SessionService, FlashService) {
    var sanitize = function(concept) {
      return {
        name: $sanitize(concept.name),
        image: concept.image,
        description: $sanitize(concept.description)
      };
    }
    return {
      getConcepts: function(domain) {
        var concept_id = SessionService.get('concept.id');
        if(concept_id) { // we need to show a specific
          SessionService.unset('concept.id');
          domain.concept_id = concept_id;
        }
        var request = $http.post('api/concepts', domain);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      },
      getPlayedConcepts: function(domain) {
        var request = $http.post('api/playedConcepts', domain);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      },
      addConcept: function(concept) { // TODO: add the concept on each input and try to find a match
        var request = $http.post('api/concepts/add', sanitize(concept));
        request.then(FlashService.clear, FlashService.showError);
        return request;
      },
      saveAssociations: function(associations) {
        var request = $http.post('api/concepts/addAssociations', associations);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      }
    };
  }
