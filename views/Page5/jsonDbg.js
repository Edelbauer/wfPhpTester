/**
 * Created by Praktikant.STTINSM on 25.07.2016.
 */
/**
 * Created by Sommer on 14.07.2016.
 */
"use strict";
var jsondbg;
/**
 * Index Controller
 */
jsondbg =  index.controller('CtrJsonDbg',function ($scope,$log) {
    $log.debug("CtrJsonDbg wurde geladen");

    $scope.jsonOut = 0;
    $scope.jsonIn = 0;

});
