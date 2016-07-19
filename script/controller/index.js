/**
 * Created by Sommer on 14.07.2016.
 */

"use strict";
var index;

/**
 * Index Controller
 */
index = angular.module("app.index",[])
    .controller('CtrlIndex',function ($scope,$log) {
        $log.debug("Index Controller wurde geladen");

        /** UserData Array  */
        $scope.userData = [];

        /** UserData Item */
        $scope.users = {};



        /** Button eintragen */
        $scope.eintragen = function () {
            $scope.userData.push($scope.users);
            $scope.users={};
        };
    });
