/**
 * Created by Sommer on 14.07.2016.
 */
"use strict";
var charts;
/**
 * Index Controller
 */
charts =  index.controller('CtrlCharts',function ($scope,$log) {
    $log.debug("Charts Controller wurde geladen");

    $scope.chartValues = [
        {
            value: 100,
            color:"#4ED18F",
            highlight: "#15BA67",
            label: "Alfa"
        },
        {
            value: 250,
            color: "#15BA67",
            highlight: "#15BA67",
            label: "Beta"
        },
        {
            value: 100,
            color: "#5BAABF",
            highlight: "#15BA67",
            label: "Gamma"
        },
        {
            value: 40,
            color: "#94D7E9",
            highlight: "#15BA67",
            label: "Peta"
        },
        {
            value: 120,
            color: "#BBE0E9",
            highlight: "#15BA67",
            label: "X"
        }
    ];
    $scope.Var=10;

    $scope.json = 0;

    $scope.onEnter= function () {
        alert("Enter");
    };

});
