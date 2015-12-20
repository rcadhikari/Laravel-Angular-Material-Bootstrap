@extends('layouts.master')

@section('app-content')

    <div ng-view></div>

    {{--<div ng-controller="homeController">--}}
    <div>
        <h4>This is a combine version of "Laravel-Angular-Material-Bootstrap" sample.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis
            vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et
            lacinia ipsum quam nec dui.</p>
        <p>Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio,
            elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis sodales nec
            vulputate justo hendrerit. Vivamus varius pretium ligula, a aliquam odio euismod sit amet. Quisque laoreet sem sit amet orci
            ullamcorper at ultricies metus viverra. Pellentesque arcu mauris, malesuada quis ornare accumsan, blandit sed diam.</p>

        <p>&nbsp;</p>

    </div>

    <div class="col-md-3"></div>
    <div class="panel panel-info p1-welcome-panel col-md-6">
        <div class="panel-body">

            <div ng-controller="DemoCtrl" layout="column" ng-cloak class="md-inline-form">
                <md-content layout-padding>

                        <form name="userForm">
                            <div layout-gt-sm="row">
                                <md-input-container class="md-primary" flex-gt-sm>
                                    <label>Username</label>
                                    <input ng-model="user.username">
                                </md-input-container>
                            </div>

                            <div layout-gt-sm="row">
                                <md-input-container class="md-primary" flex-gt-sm>
                                    <label>Password</label>
                                    <input ng-model="user.password">
                                </md-input-container>
                            </div>

                            <button ng-transclude="" type="button" class="md-raised md-primary md-button md-ink-ripple">
                                <span class="ng-scope">Login</span>
                                <div class="md-ripple-container" style=""></div>
                            </button>

                        </form>

                </md-content>
            </div>

        </div>

    </div>

    <div class="col-md-3"></div>


@stop