<!-- Header -->

    <md-toolbar hide-gt-md id="header" layout="row" layout-align="start center" class="md-whiteframe-z1" ng-controller="HeaderCtrl">

        <md-button id="navigationBtn" hide-gt-md ng-click="openLeftMenu()" aria-label="Toggle Menu">
            <md-icon md-font-set="material-icons md-dark">menu</md-icon>
        </md-button>

        <img hide-gt-md class="logo" src="{{ asset('images/logos/logo.gif') }}" alt="logo" />

        <h2 class="md-toolbar-item md-breadcrumb md-headline">
            <span hide-sm class="ng-binding">Laravel-Angular-Material-Bootstrap Latest Combined Version</span>
        </h2>

    </md-toolbar>

    <md-toolbar layout="row" layout-align="start center">
        <h2 class="md-toolbar-tools md-toolbar-tools-bottom md-breadcrumb">
            <div ncy-breadcrumb></div>
        </h2>
    </md-toolbar>

<!-- // Header -->