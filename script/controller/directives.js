/**
 * Created by Praktikant.STTINSM on 19.07.2016.
 */
/**
 * AppName
 */
app.directive("wfAppName",function (appName) {
    return{
        template : "<div class='well well-sm'><h4>" + appName + "</h4></div>"
    };
});
/**
 * Dashboard Panel
 */
app.directive("wfDashPanel",function () {
    return{
        scope : {
            ngModel : "=ngModel",
            dbName : "@"
        },
        controller : function ($scope) {
            $scope.label = "Hier sollte der Name stehen";
            $scope.gruppe="HHier sollte die Gruppe stehen";
        },
        templateUrl : "/wfPhpTester/templates/wfDashPanel.html",
        link : function ($scope,$element,$attrs) {
        }
    };
});
/**
 *Page 3
 **/
app.directive("wfDashPanel2",function () {
    return{
        scope : {
            ngModel : "=ngModel",
            dbName : "@"
        },
        controller : function ($scope) {
            $scope.label = "Hier sollte der Name stehen";
            $scope.gruppe="HHier sollte die Gruppe stehen";
        },
        templateUrl : "/wfPhpTester/templates/wfDashPanel2.html",
        link : function ($scope,$element,$attrs) {
        }
    };
});
/**
 * charts (page4)
 */
app.directive("wfDashChart",function () {
    return{
        scope : {
            ngModel : "=ngModel",
            chartName :"@"
        },
        controller : function ($scope) {
        },
        link: function (scope,element,attr) {
            console.log(scope);
            /* Init Chart Canvas */
            var chartObj = $('#' + scope.chartName)[0].getContext("2d");
            new Chart(chartObj).Doughnut(scope.ngModel, {
                responsive : true,
                showTooltips: true
            });
        },
        templateUrl : "/wfPhpTester/templates/wfDashPanelChart.html"
    };
});
/**
 * WfNumPad
 */
app.directive("wfNumPad",function ($log) {
    return{
        scope : {
            ngModel : "=ngModel",
            fireEnter : "&onEnter"
        },
        controller : function ($scope) {
        },
        templateUrl : "/wfPhpTester/templates/wfNumPad.html",

        link: function (scope,elem,attr){
            /*Select alle elemente mit namen evtBtn*/
          var btns = elem[0].querySelectorAll('[name="bntNum"]');
            var btnEnter = elem[0].querySelectorAll('[name="bntEnter"]');
            var btnClear = elem[0].querySelectorAll('[name="bntClear"]');
            var value =scope.ngModel;
            $log.debug(btns);
            $(btns).on("click",function(){
                $log.debug(btns);
                value = $(this).val();
                scope.$apply(function(){
                    scope.ngModel += value;
                });
            });
            $(btnEnter).on("click",function(){
                scope.fireEnter();
            });
            /**
             * Der String wird um die letzte Stelle veringert
             */
            $(btnClear).on("click",function(){
                var h=scope.ngModel;
                scope.$apply(function(){
                    var b = h.substring(0, h.length-1);
                    scope.ngModel=b;
                });
            });
        }
    };
});