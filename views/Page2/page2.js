/**
 * Created by Sommer on 14.07.2016.
 */

"use strict";
var page2;

/**
 * Index Controller
 */
page2 =  index.controller('CtrlPage2',function ($scope,$log) {
    $log.debug("Page2 Controller wurde geladen");
    $scope.sliderValue = 50;
    $scope.daten = 25;

    $scope.options = {
        from:0,
        to:100,
        step:1,
        realtime:true
    };
});


