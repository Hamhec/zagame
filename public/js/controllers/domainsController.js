(function() {
  'use strict';

  angular.module('myApp').controller('DomainsController', ['$location', 'DomainsService', DomainsController]);

  function DomainsController($location, DomainsService) {
    var domains = this;

    DomainsService.get().then(function(response) {
        domains.data = response.data;
    });

    domains.select = function(domain) {
      DomainsService.setDomain(domain);
      $location.path('/profiles');
    }
  }

})();
