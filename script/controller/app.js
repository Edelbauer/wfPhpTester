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
        templateUrl: '/wfPhpTester/views/Page1/page1.html?' + new Date().getTime(),
        controller: 'CtrlPage1'
        })
        .when('/page2', {
            templateUrl: '/wfPhpTester/views/Page2/page2.html?' + new Date().getTime(),
            controller: 'CtrlPage2'
        })
        .when('/page3', {
            templateUrl: '/wfPhpTester/views/Page3/page3.html?' + new Date().getTime(),
            controller: 'CtrlPage3'
        })
        .when('/charts', {
            templateUrl: '/wfPhpTester/views/charts/charts.html?' + new Date().getTime(),
            controller: 'CtrlCharts'
        })
        .when('/jsonDbg', {
            templateUrl: '/wfPhpTester/views/Page5/jsonDbg.html?' + new Date().getTime(),
            test:  'var testJson = {"employees": [{"firstName": "John", "lastName": "Doe"}, {"firstName": "Anna", "lastName": "Smith"}, {"firstName": "Peter", "lastName": "Jones"}]}',
            controller: 'CtrJsonDbg'
        })
        .when('/login', {
            templateUrl: '/wfPhpTester/views/login/login.html?' + new Date().getTime(),
            controller: 'Ctrlogin'
        })
        .when('/diagramm', {
            templateUrl: '/wfPhpTester/views/diagramm/diagramm.html?' + new Date().getTime(),
            controller: 'Ctrdiagramm'
        })
        .when('/diagramm2', {
            templateUrl: '/wfPhpTester/views/diagramm2/diagramm2.html?' + new Date().getTime(),
            controller: 'Ctrdiagramm2'
        })
        .when('/diagramm3', {
            templateUrl: '/wfPhpTester/views/diagramm3/diagramm3.html?' + new Date().getTime(),
            controller: 'Ctrdiagramm3'
        })
        .when('/diagramm4', {
            templateUrl: '/wfPhpTester/views/diagramm4/diagramm4.html?' + new Date().getTime(),
            controller: 'Ctrdiagramm4'
        })
        .otherwise({
            redictTo: '/#'
        });
});