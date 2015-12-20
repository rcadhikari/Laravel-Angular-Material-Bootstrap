<!DOCTYPE html>
<html lang="en" ng-app="{{ (isset($pageVars['angularAppName']) ? $pageVars['angularAppName'] : '' ) }}">
<head>
    <title>{{ $pageVars['title'] }}</title>

    @section('meta')
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('images/fti-favicon.ico') }}" />
        <link rel="Shortcut Icon" type="image/x-icon" href="{{ URL::asset('images/fti-favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @show

    @section('css-head')
        <link href="{{ asset('css/all-angular.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css" />
    @stop

    @section('js-head')
        {{--<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.0/angular.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.0/angular-animate.min.js" type="text/javascript"></script>--}}
        {{--<script src="{{ asset('js/all-angular.js') }}" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.0/angular.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.0/angular-animate.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
            <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>--}}

    @stop

    @section('js-foot')
        <script src="{{ asset('js/all-angular.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stop

    @yield('css-head')

    @yield('js-head')

</head>
{{--<body layout="row" {{ isset($pageVars['bodyClass']) ? ' class="'.$pageVars['bodyClass'].'"' : '' }} >--}}

<body class="ng-cloak">

    <div role="main" class="container">

        <header>
            @include('partials.navigation')
        </header>

        <div id="main">
            <md-content flex id="content">

                <div id="appContent">

                    @yield('app-content')

                </div>
            </md-content>

            @include('partials.footer')

        </div>

        <script> var _token = '<?php echo csrf_token(); ?>'; </script>

        @yield('js-foot')

    </div>

</body>

</html>