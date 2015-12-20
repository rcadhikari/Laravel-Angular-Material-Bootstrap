/**
 * Created by radhika on 24/11/2015.
 */

function helloMe()
{
    alert('hello me');
}

// Create the Angular app object
var myapp = angular.module('appWandle', ["ui.router"]);
myapp.config(function($stateProvider){
    $stateProvider
        .state('index', {
            url: "",
            views: {
                "viewA": {
                    template: "index.viewA"
                },
                "viewB": {
                    template: "index.viewB"
                }
            }
        })
        .state('route1', {
            url: "/route1",
            views: {
                "viewA": {
                    template: "route1.viewA"
                },
                "viewB": {
                    template: "route1.viewB"
                }
            }
        })
        .state('route2', {
            url: "/route2",
            views: {
                "viewA": {
                    template: "route2.viewA"
                },
                "viewB": {
                    template: "route2.viewB"
                }
            }
        })
});
/*var app = angular.module('myApp', [
    // List of angular modules
    //'ui.router'
    //'ngMaterial'
]);*/

/*
function TodosController($scope) {
    $scope.todos = [
        { body: 'Go to homepage' },
        { body: 'Go to about us' }
    ];
}
*/

/*app.controller('TodosController', function($scope){
    $scope.todos = [
        { body: 'Go to homepage' },
        { body: 'Go to about us' }
    ];
})*/

// Config the angular app route
/*app.config( function($routeProvider) {

    $routeProvider
        .when('/', {
            templateUrl: 'pages/main.html',
            controller: 'homeController'
        })

        .when('/about', {
            templateUrl: 'pages/second.html',
            controller: 'aboutController'
        })
});

// Create the home controller;
app.controller('homeController', ['$scope', '$location', '$log',
    function($scope, $location, $log) {

        $log.info($location.path());
    }
]);

app.controller('aboutController', ['$scope', '$location', '$log',
    function($scope, $location, $log) {
        $scope.wandle = 'Wandle';
        console.log($scope);

        $log.info($location.path());
    }
]);*/

/*

var searchUser = function (firstName, lastName, height, age, occupation)
{
    return 'Hello RC';
}
function getVal(id) {
    return document.getElementById(id).value;
}
// $info = searchUser.toString(); // convert the function to string.
$info = angular.injector().annotate(searchUser);
console.log( $info );

window.addEventListener('hashchange', function() {

    if (window.location.hash == '#/page/1') {
        console.log('Go to page 1');
    }
});
*/

//# sourceMappingURL=app.js.map


//var mainApp = angular.module('appController', []);

/*
phonecatApp.controller('PhoneListCtrl', function ($scope) {
    $scope.phones = [
        {'name': 'Nexus S',
            'snippet': 'Fast just got faster with Nexus S.'},
        {'name': 'Motorola XOOM™ with Wi-Fi',
            'snippet': 'The Next, Next Generation tablet.'},
        {'name': 'MOTOROLA XOOM™',
            'snippet': 'The Next, Next Generation tablet.'}
    ];
});*/

/**
 * Created by radhika on 24/11/2015.
 */

function getVal(id)
{
    return document.getElementById(id).value;

}

// To run this below code with > babel instead of > scripts
// var isOfDrinkingAge = age => age > 20;
//# sourceMappingURL=app.js.map
