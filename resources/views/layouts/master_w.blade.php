<!DOCTYPE html>
<html lang=en ng-app="{{ (isset($pageVars['angularAppName']) ? $pageVars['angularAppName'] : '' ) }}">
<head>
    <title>{{ $pageVars['title'] }}</title>

    @section('meta')
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" type="image/x-icon" href="{{ URL::asset('images/fti-favicon.ico') }}" />
        <link rel="Shortcut Icon" type="image/x-icon" href="{{ URL::asset('images/fti-favicon.ico') }}" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @show

    @yield('css')

    @yield('js-head')

</head>
<body layout="row" {{ isset($pageVars['bodyClass']) ? ' class="'.$pageVars['bodyClass'].'"' : '' }} >

    @include('partials.navigation')

    <div id="main" flex layout="column" tabIndex="-1" role="main" class="md-whiteframe-z2">

        @include('partials.header')

        <md-content flex id="content">

            <div id="appContent">

                @yield('app-content')

            </div>
        </md-content>

        @include('partials.footer')

    </div>

    <script> var _token = '<?php echo csrf_token(); ?>'; </script>

    @yield('js-foot')

</body>
</html>