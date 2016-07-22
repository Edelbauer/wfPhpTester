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
            ngModel : "=ngModel"
        },
        controller : function ($scope) {

        },

        templateUrl : "/wfPhpTester/templates/wfNumPad.html",

        link: function (scope,emem,attr){

          var btns = elem[0].querySelektorAll ('[name="btnNum"]');
            var btnEnter = elem[0].querySelectorAll('[name="btnEnter"]');
            var value =scope.ngModel;

            $(btns).on("click",function(){
                value = $(this).val();
                scope.$allpy(function(){
                    scope.ngModel += value;
                });

            });
            $(btnEnter).on("click",function(){
               scope.fireEnter();
            });
        }


    }

});


