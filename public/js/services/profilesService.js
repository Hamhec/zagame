(function() {
  'use strict';

  angular.module('myApp').factory('ProfilesService', ['$http', 'FlashService', ProfilesService]);

  function ProfilesService($http, FlashService) {

    return {
      get: function(domain) {
        var profiles = $http.post('api/profiles', domain);
        profiles.then(FlashService.clear, FlashService.showError);
        return profiles;
      },
      saveAnswers: function(answers) {
        var saving = $http.post('api/profiles/answers', answers);
        saving.then(FlashService.clear, FlashService.showError);
        return saving;
      },
      answeredProfiles: function(domain) {
        var request = $http.post('api/profiles/answered', domain);
        request.then(FlashService.clear, FlashService.showError);
        return request;
      }
    };
  }

})();
