/**
 * Created by Praktikant.STTINSM on 29.07.2016.
 */
var dataArray =[];
var chart = new CanvasJS.Chart("chartContainer", {
    title : {
        text : "Dynamic Data"
    },
    data : [{
        type : "spline",
        dataPoints : dataArray
    }
    ]
});
var start = function () {

    var wsImpl = window.WebSocket || window.MozWebSocket;

    window.ws = new wsImpl('ws://localhost:8181/');

    ws.onmessage = function (evt) {
        console.log(evt.data);

        dia4(Number(evt.data));
    };
};
start();
function dia4(newValue){
    var count = 0;
    if (dataArray.length==0){
        dataArray[0]={ x:0, y:newValue };
    }else{
        count = dataArray[dataArray.length -1].x;
    }

    var json = { x: ++count ,y:newValue};
    console.log(json);
    dataArray.push(json);
    if (dataArray.length>19){
        dataArray.shift();
    }
    chart.render();
}