(function() {
  'use strict';

  angular.module('myApp').factory('PlayService', ['$http', '$sanitize', 'FlashService', PlayService]);

  function PlayService($http, $sanitize, FlashService) {
    var sanitize = function(concept) {
      return {
        name: $sanitize(concept.name),
        image: concept.image,
        description: $sanitize(concept.description)
      };
    }
    return {
      getConcepts: function(domain) {
        var request = $http.post('api/concepts', domain);
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

})();
