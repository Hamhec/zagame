(function() {
  'use strict';

  angular.module('myApp').controller('DomainsController', ['$rootScope', '$location', 'DomainsService', 'PlayService', DomainsController]);

  function DomainsController($rootScope, $location, DomainsService, PlayService) {
    var domains = this;

    DomainsService.get().then(function(response) {
        domains.data = response.data;
    });

    domains.select = function(domain) {
      DomainsService.setDomain(domain);

      console.log('Changing shit!');
      $rootScope.sideNav.tab = 1;
      $rootScope.sideNav.domain = domain;
      PlayService.getPlayedConcepts(domain).then(function (response) {
        $rootScope.sideNav.play = response.data;
      });

      $location.path('/profiles');
    }
  }

})();
