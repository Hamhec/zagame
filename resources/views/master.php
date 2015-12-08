<!doctype html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1" />
    <title>Za Game</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/bower_components/angular-material/angular-material.css" >
  </head>

  <body ng-app="myApp">
    <!-- Application Dependencies -->
    <script type="text/javascript" src="/bower_components/underscore/underscore-min.js"></script>
    <script type="text/javascript" src="/bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
    <script type="text/javascript" src="/bower_components/angular-material/angular-material.js"></script>
    <script type="text/javascript" src="/bower_components/angular-animate/angular-animate.js"></script>
    <script type="text/javascript" src="/bower_components/angular-aria/angular-aria.js"></script>
    <script type="text/javascript" src="/bower_components/angular-route/angular-route.js"></script>
    <!-- Application Scripts -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- Application Controllers -->
    <script type="text/javascript" src="/js/controllers/loginController.js"></script>
    <script type="text/javascript" src="/js/controllers/registerController.js"></script>
    <script type="text/javascript" src="/js/services/authService.js"></script>
    <!-- Application Services -->
    <script type="text/javascript" src="/js/services/registrationService.js"></script>
    <script type="text/javascript" src="/js/services/sessionService.js"></script>
    <script type="text/javascript" src="/js/services/flashService.js"></script>
    <!-- CSRF Token -->
    <script type="text/javascript">
      angular.module('myApp').constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
    </script>

    <!-- Main Container -->
    <div layout="column" layout-fill role="main">
      <!-- Upper bar -->
      <md-toolbar class="md-white-frame-z2">
        <h1 class="md-toolbar-tools" layout-align-lt-md="center">Za Game</h1>
      </md-toolbar>

      <!-- Content -->
      <div class="md-default-theme" layout-fill>
        <md-content layout="colum" id="content" layout-fill>
          <div layout="row" layout-align="center center" flex>
            <div layout="column" flex flex-gt-sm="90" flex-gt-md="80">
              <div id="flash" ng-show="flash" flex>
                <md-toolbar class="md-warn">
                  <h1 class="md-toolbar-tools">{{ flash }}</h1>
                </md-toolbar>
              </div>
              <div id="view" ng-view flex></div>
            </div>
          </div>
        </md-content>
      </div>
    </div>
  </body>
</html>
