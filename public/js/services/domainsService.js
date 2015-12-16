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
        SessionService.set('domain.nbr_clicks', selected_domain.nbr_clicks);
      },

      getDomain: function() {
        var domain = {};
        domain.id = SessionService.get('domain.id');
        domain.title = SessionService.get('domain.title');
        domain.text = SessionService.get('domain.text');
        domain.image = SessionService.get('domain.image');
        domain.nbr_clicks = SessionService.get('domain.nbr_clicks');
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
