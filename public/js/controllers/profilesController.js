(function() {
  'use strict';

  angular.module('myApp').controller('ProfilesController', ['$location', 'DomainsService', 'ProfilesService', ProfilesController]);

  function ProfilesController($location, DomainsService, ProfilesService) {
    var profiles = this;

    profiles.domain = DomainsService.getDomain();

    ProfilesService.get(profiles.domain).then(function(response) {
        profiles.data = response.data;

        ProfilesService.answeredProfiles(profiles.domain).then(function(response) {
          profiles.answered = response.data;
          mergeProfiles();
        });
    });

    profiles.submit = function() {
      ProfilesService.saveAnswers(profiles.data)
       .then(function(response) { // success
        $location.path('/play');
      });
    };

    var mergeProfiles = function() {
      var profiles_map = {};
      _.each(profiles.data, function(val) {
        profiles_map[val.id] = val;
      });

      _.each(profiles.answered, function(profile) {
        profiles_map[profile.id].answer = profile.pivot.profile_possible_value_id;
      });
    }
  }

})();
