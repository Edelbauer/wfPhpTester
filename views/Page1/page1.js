/**
 * Created by Sommer on 14.07.2016.
 */

"use strict";
var page1;

/**
 * Index Controller
 */
page1 = index.controller('CtrlPage1',function ($scope,$log) {
        $log.debug("Page1 Controller wurde geladen");

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