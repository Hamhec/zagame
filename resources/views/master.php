<!doctype html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1" >
    <title>Za Game</title>
    <link rel="stylesheet" href="/bower_components/angular-material/angular-material.css" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
    <link rel="stylesheet" href="/css/style.css" >
  </head>

  <body ng-app="myApp" layout="column">
    <!-- Application Dependencies -->
    <script type="text/javascript" src="/bower_components/underscore/underscore-min.js"></script>
    <script type="text/javascript" src="/bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="/bower_components/angular-sanitize/angular-sanitize.min.js"></script>
    <script type="text/javascript" src="/bower_components/angular-material/angular-material.js"></script>
    <script type="text/javascript" src="/bower_components/angular-animate/angular-animate.js"></script>
    <script type="text/javascript" src="/bower_components/angular-aria/angular-aria.js"></script>
    <script type="text/javascript" src="/bower_components/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="/bower_components/angular-translate/angular-translate.min.js"></script>
    <script type="text/javascript" src="/bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>
    <script type="text/javascript" src="/bower_components/angular-drag-and-drop-lists/angular-drag-and-drop-lists.min.js"></script>
    <!-- Application Scripts -->
    <script type="text/javascript" src="/js/app.js"></script>
    <!-- Application Controllers -->
    <script type="text/javascript" src="/js/controllers/loginController.js"></script>
    <script type="text/javascript" src="/js/controllers/registerController.js"></script>
    <script type="text/javascript" src="/js/controllers/domainsController.js"></script>
    <script type="text/javascript" src="/js/controllers/profilesController.js"></script>
    <script type="text/javascript" src="/js/controllers/playController.js"></script>
    <script type="text/javascript" src="/js/controllers/scoreController.js"></script>
    <script type="text/javascript" src="/js/controllers/matchesController.js"></script>
    <!-- Application Services -->
    <script type="text/javascript" src="/js/services/sessionService.js"></script>
    <script type="text/javascript" src="/js/services/flashService.js"></script>
    <script type="text/javascript" src="/js/services/authService.js"></script>
    <script type="text/javascript" src="/js/services/registrationService.js"></script>
    <script type="text/javascript" src="/js/services/domainsService.js"></script>
    <script type="text/javascript" src="/js/services/profilesService.js"></script>
    <script type="text/javascript" src="/js/services/playService.js"></script>
    <script type="text/javascript" src="/js/services/scoreService.js"></script>
    <script type="text/javascript" src="/js/services/matchesService.js"></script>
    <!-- CSRF Token -->
    <script type="text/javascript">
      angular.module('myApp').constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
    </script>

    <!-- Header -->
    <md-toolbar id="header" layout="row">
      <md-button ng-click="toggleSidenav('left')" hide-gt-md aria-label="Menu">
        <div class="icon"><i class="material-icons md-24">view_headline</i></div>
      </md-button>

      <h1 class="md-toolbar-tools" flex hide show-gt-md>Knowledge AssociaTions Game <span class="text-small">v0.1.3</span></h1>
      <h1 class="md-toolbar-tools" flex hide-gt-md>KAT <span class="text-small">v0.1.3</span></h1>

      <md-button ng-click="goTo('/matches')" ng-show="isLoggedIn()">Score: {{totalScore}}pts</md-button>

      <md-button ng-click="goTo('/home')" translate="BTN_HOME"></md-button>
      <md-button ng-click="goTo('/domains')" translate="BTN_DOMAINS"></md-button>
      <md-button ng-click="logout()" ng-show="isLoggedIn()" translate="BTN_LOGOUT"></md-button>
      <md-button ng-click="goTo('/login')" ng-show="!isLoggedIn()" translate="BTN_LOGIN"></md-button>
      <md-button ng-click="goTo('/register')" ng-show="!isLoggedIn()" translate="BTN_REGISTER"></md-button>
    </md-toolbar> <!-- /Header -->

    <!-- Body -->
    <md-content id="body" flex layout="row">
      <md-sidenav layout="column" class="md-sidenav-left" md-is-locked-open="$mdMedia('gt-md')">
        <md-list style="margin-bottom: 10px;">
          <!-- Home -->
          <md-list-item class="md-1-line" ng-click="goTo('/home')">
            <div class="icon"><i class="material-icons md-24">home</i></div>
            <div class="md-list-item-text" flex translate="BTN_HOME"></div>
          </md-list-item>
          <!-- Login -->
          <md-list-item class="md-1-line" ng-click="goTo('/login')" ng-show="!isLoggedIn()">
            <div class="icon"><i class="material-icons md-24">exit_to_app</i></div>
            <div class="md-list-item-text" flex translate="BTN_LOGIN"></div>
          </md-list-item>
          <!-- Signup -->
          <md-list-item class="md-1-line" ng-click="goTo('/register')" ng-show="!isLoggedIn()">
            <div class="icon"><i class="material-icons md-24">open_in_browser</i></div>
            <div class="md-list-item-text" flex translate="BTN_REGISTER"></div>
          </md-list-item>
          <!-- Logout -->
          <md-list-item class="md-1-line" ng-click="logout()" ng-show="isLoggedIn()">
            <div class="icon"><i class="material-icons md-24">power_settings_new</i></div>
            <div class="md-list-item-text" flex translate="BTN_LOGOUT"></div>
          </md-list-item>
          <!-- Domains -->
          <md-list-item class="md-1-line" ng-click="goTo('/domains')" ng-show="isLoggedIn()">
            <div class="icon"><i class="material-icons md-24">dns</i></div>
            <div class="md-list-item-text" flex translate="BTN_DOMAINS"></div>
          </md-list-item>
        </md-list>

        <!-- TAB -->
        <md-tabs md-dynamic-height md-border-bottom md-selected="sideNav.tab">
          <md-tab label="Dashboard" ng-disabled="!isLoggedIn()">
            <md-list>
              <md-list-item class="md-1-line" ng-click="goTo('/domains')">
                <div class="icon"><i class="material-icons md-24">games</i></div>
                <div class="md-list-item-text" flex translate="PROFILE_PLAY"></div>
              </md-list-item>
              <md-list-item class="md-1-line" ng-click="goTo('/matches')">
                <div class="icon"><i class="material-icons md-24">view_list</i></div>
                <div class="md-list-item-text" flex translate="SCORES"></div>
              </md-list-item>
              <md-list-item class="md-1-line" ng-click="showNotCompleted($event)">
                <div class="icon"><i class="material-icons md-24">timeline</i></div>
                <div class="md-list-item-text" flex translate="STATS"></div>
              </md-list-item>
            </md-list>
          </md-tab>
          <md-tab label="Play" ng-disabled="!isLoggedIn()">
            <md-list>
              <md-subheader class="md-no-sticky"> {{sideNav.domain.title}} ({{sideNav.play.nbr_played_concepts}}/{{sideNav.play.nbr_concepts}})</md-subheader>
              <md-list-item class="md-1-line" ng-repeat="concept in sideNav.play.concepts">
                <md-button class="md-list-item-text" flex ng-click="sideNav.conceptSelected(concept)">{{ concept.name }}</md-button>

                <md-button class="md-primary" ng-click="sideNav.score(concept)">Voir score</md-button>
              </md-list-item>
            </md-list>
          </md-tab>
          <md-tab label="About">
            <md-list>
              <md-list-item class="md-1-line" ng-click="showNotCompleted($event)">
                <div class="icon"><i class="material-icons md-24">gps_fixed</i></div>
                <div class="md-list-item-text" flex translate="PURPOSE"></div>
              </md-list-item>
              <md-list-item class="md-1-line" ng-click="showNotCompleted($event)">
                <div class="icon"><i class="material-icons md-24">chrome_reader_mode</i></div>
                <div class="md-list-item-text" flex translate="PRIVACY"></div>
              </md-list-item>
              <md-list-item class="md-1-line" ng-click="showNotCompleted($event)">
                <div class="icon"><i class="material-icons md-24">feedback</i></div>
                <div class="md-list-item-text" flex>Feedback</div>
              </md-list-item>
              <md-list-item class="md-1-line" ng-click="showNotCompleted($event)">
                <div class="icon"><i class="material-icons md-24">import_contacts</i></div>
                <div class="md-list-item-text" flex>Academic Research</div>
              </md-list-item>
            </md-list>
          </md-tab>
        </md-tabs>
      </md-sidenav> <!-- /Sidenav -->

        <md-content id="outer-content" flex layout="row">
            <md-content id="inner-content" flex style="padding: 10px;">
              <div id="flash" ng-show="flash" flex>
                <md-toolbar class="md-warn">
                  <h1 class="md-toolbar-tools">{{ flash }}</h1>
                </md-toolbar>
              </div>
              <div id="view" ng-view flex></div>
            </md-content>
        </md-content>
    </md-content>
  </body>














</html>
