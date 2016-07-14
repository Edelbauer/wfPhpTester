/**
 * Created by Praktikant.STTINSM on 12.07.2016.
 */
"use strict";

/** Angular APP starten  */
var app = angular.module("app",['app.version','app.index']);

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




