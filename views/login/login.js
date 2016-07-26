"use strict";
var charts;
/**
 * Index Controller
 */
charts =  index.controller('Ctrllogin',function ($scope,$log) {
    $log.debug("login Controller wurde geladen");


    $scope.Var=10;

    $scope.json = 0;

    $scope.onEnter= function () {
        alert("Enter");
    };

});
