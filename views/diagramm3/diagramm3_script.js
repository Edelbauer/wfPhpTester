/**
 * Created by Praktikant.STTINSM on 29.07.2016.
 */

var chart = new CanvasJS.Chart("chartContainer",
    {
        title:{
            text: "Überschrift"

        },
        data: [{
            type: "stackedArea", //or stackedColumn
            dataPoints: [
                { x: 10, y: 171 },
                { x: 20, y: 155},
                { x: 30, y: 150 },
                { x: 40, y: 165 },
                { x: 50, y: 195 },
                { x: 60, y: 168 },
                { x: 70, y: 128 },
                { x: 80, y: 134 },
                { x: 90, y: 114}
            ]
        },{
            type: "stackedArea", //or stackedColumn
            dataPoints: [
                { x: 10, y: 101 },
                { x: 20, y: 105},
                { x: 30, y: 100 },
                { x: 40, y: 105 },
                { x: 50, y: 105 },
                { x: 60, y: 108 },
                { x: 70, y: 108 },
                { x: 80, y: 104 },
                { x: 90, y: 104}
            ]
        }
        ]
    });

chart.render();
