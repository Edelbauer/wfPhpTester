/**
 * Created by Sommer on 14.07.2016.
 */

"use strict";
var page3;

/**
 * Index Controller
 */
page3 =  index.controller('CtrlPage3',function ($scope,$log) {
    $log.debug("Page3 Controller wurde geladen");

    $scope.showDetail = false;

    $scope.daten = 25;

    /* JsObject */
    $scope.dataObj = {};
    $scope.dataObj.Wert1 = 100;
    $scope.dataObj.Wert2 = 200;
    $scope.dataObj.Wert3 = 300;

    /* JSON */
    $scope.dataObjJson = {Wert1:200,Wert2:300,Wert3:400};

    /* Json Array */
    $scope.arrayDataJson = [];
    $scope.arrayDataJson.push($scope.dataObjJson);
    $scope.arrayDataJson.push($scope.dataObj);
    $scope.arrayDataJson.push({Wert1:500,Wert2:600,Wert3:700});

    /**
     *
     * @param item
     */
    $scope.showData = function (item) {
        $scope.showDetail = true;
        $scope.detailData = item;
    };

    $scope.closeDetail = function () {
        $scope.showDetail = false;
    }

});


