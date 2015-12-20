@extends('layouts.master')

@section('app-content')

    <style>
        .inputdemoBasicUsage .md-datepicker-button {
            width: 36px; }
    </style>


    <p>
        <input type="button" value="set" ng-click="myCssVar='css-class'">
        <input type="button" value="clear" ng-click="myCssVar=''">
        <br>
        <span ng-class="myCssVar">CSS-Animated Text</span>
    </p>


    <div ng-controller="DemoCtrl" layout="column" ng-cloak class="md-inline-form">
        <md-content md-theme="docs-dark" layout-gt-sm="row" layout-padding>
            <div>
                <md-input-container>
                    <label>Title</label>
                    <input ng-model="user.title">
                </md-input-container>
                <md-input-container>
                    <label>Email</label>
                    <input ng-model="user.email" type="email">
                </md-input-container>
            </div>
        </md-content>
        <md-content layout-padding>
            <div>
                <form name="userForm">
                    <div layout-gt-xs="row">
                        <md-input-container class="md-block" flex-gt-xs>
                            <label>Company (Disabled)</label>
                            <input ng-model="user.company" disabled>
                        </md-input-container>
                        <md-datepicker ng-model="user.submissionDate" md-placeholder="Enter date">
                        </md-datepicker>
                    </div>
                    <div layout-gt-sm="row">
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>First name</label>
                            <input ng-model="user.firstName">
                        </md-input-container>
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Last Name</label>
                            <input ng-model="theMax">
                        </md-input-container>
                    </div>
                    <md-input-container class="md-block">
                        <label>Address</label>
                        <input ng-model="user.address">
                    </md-input-container>
                    <md-input-container md-no-float class="md-block">
                        <input ng-model="user.address2" placeholder="Address 2">
                    </md-input-container>
                    <div layout-gt-sm="row">
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>City</label>
                            <input ng-model="user.city">
                        </md-input-container>
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>State</label>
                            <md-select ng-model="user.state">
                                <md-option ng-repeat="state in states" value="@{{state.abbrev}}">
                                    @{{state.abbrev}}
                                </md-option>
                            </md-select>
                        </md-input-container>
                        <md-input-container class="md-block" flex-gt-sm>
                            <label>Postal Code</label>
                            <input name="postalCode" ng-model="user.postalCode" placeholder="12345"
                                   required ng-pattern="/^[0-9]{5}$/" md-maxlength="5">
                            <div ng-messages="userForm.postalCode.$error" role="alert" multiple>
                                <div ng-message="required" class="my-message">You must supply a postal code.</div>
                                <div ng-message="pattern" class="my-message">That doesn't look like a valid postal
                                    code.
                                </div>
                                <div ng-message="md-maxlength" class="my-message">
                                    Don't use the long version silly...we don't need to be that specific...
                                </div>
                            </div>
                        </md-input-container>
                    </div>
                    <md-input-container class="md-block">
                        <label>Biography</label>
                        <textarea ng-model="user.biography" columns="1" md-maxlength="150" rows="5"></textarea>
                    </md-input-container>
                </form>
            </div>
        </md-content>
    </div>



@stop

