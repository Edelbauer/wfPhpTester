/**
 * Created by Praktikant.STTINSM on 28.07.2016.
 */
"use strict";
var charts;
/**
 * Index Controller
 */
charts =  index.controller('Ctrdiagramm4',function ($scope,$log) {
    $log.debug("diagramm4 Controller wurde geladen");
});

var anders = [];
function arr(){
    var i;
    //Die ersten 20 Ziffern werden generiert
    for (i=0;i<20;i++){
        anders.push(Math.floor((Math.random() * 10)));
    }
    console.log(anders);
}
arr();

function arr2(){

    //das 21. Zeichen wird generiert, und das 1. wird abgeschnitten
    anders.push(Math.floor((Math.random() * 10))) ;

anders.shift();
console.log(anders);
}