/**
 * Created by Praktikant.STTINSM on 12.07.2016.
 */
"use strict";

/** Angular APP starten  */

var app = angular.module("app",['app.version','app.index','ngRoute','angularAwesomeSlider']);

var intervallId;
var version;


/* NG Version Controller */
version = angular.module("app.version",[]);
version.config(function ($provide) {
    $provide.constant("appName","WebFactory - Angular");
    $provide.constant("version","1.5");
    $provide.constant("author","@Sommer Patrik");
    
});


/* NG App startet */
app.run(function (appName,version,author,$rootScope,$templateCache) {
    console.info(appName);
    console.info(version);
    console.info(author);
});


/* Autom .Bootstrap */
intervallId = setInterval(function () {
    if(/loaded|complete/i.test(document.readyState)){
        angular.bootstrap(document,['app']);
        clearInterval(intervallId);
    }
},100);

app.config(function ($routeProvider)
{
    $routeProvider
        .when('/page1', {
        templateUrl: '/wfPhpTester/views/Page1/page1.html',
        controller: 'CtrlPage1'
        })
        .when('/page2', {
            templateUrl: '/wfPhpTester/views/Page2/page2.html',
            controller: 'CtrlPage2'
        })
        .when('/page3', {
            templateUrl: '/wfPhpTester/views/Page3/page3.html',
            controller: 'CtrlPage3'
        })
        .otherwise({
            redictTo: '/#'

        });
});




