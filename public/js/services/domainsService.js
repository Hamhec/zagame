(function() {
  'use strict';

  angular.module('myApp').factory('DomainsService', ['$http', 'SessionService', 'FlashService', DomainsService]);

  function DomainsService($http, SessionService, FlashService) {

    return {
      setDomain: function(selected_domain) {
        SessionService.set('domain.id', selected_domain.id);
        SessionService.set('domain.title', selected_domain.title);
        SessionService.set('domain.image', selected_domain.image);
        SessionService.set('domain.text', selected_domain.text);
        SessionService.set('domain.nbr_concepts', selected_domain.nbr_concepts);
      },

      getDomain: function() {
        var domain = {};
        domain.id = SessionService.get('domain.id');
        domain.title = SessionService.get('domain.title');
        domain.text = SessionService.get('domain.text');
        domain.image = SessionService.get('domain.image');
        domain.nbr_concepts = SessionService.get('domain.nbr_concepts');
        return domain;
      },
      get: function() {
        var domains = $http.post('api/domains');
        domains.then(FlashService.clear, FlashService.showError);
        return domains;
      }
    };
  }

})();
