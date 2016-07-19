/**
 * Created by Praktikant.STTINSM on 19.07.2016.
 */

/***
 * AppName
 */
app.directive("wfAppName",function (appName) {
    return{
        template : "<div class='well well-sm'><h4>" + appName + "</h4></div>"
    };
});

/***
 * Dashboard Panel
 */
app.directive("wfDashPanel",function () {
    return{
        scope : {
            ngModel : "=ngModel"
        },
        controller : function ($scope) {
            $scope.label = "Da muss der Name stehen";
        },
        templateUrl : "/wfPhpTester/templates/wfDashPanel.html",
        link : function ($scope,$element,$attrs) {



        }
    };
});
