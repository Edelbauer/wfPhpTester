/**
 * Created by Praktikant.STTINSM on 29.07.2016.
 */


var chart = new CanvasJS.Chart("chartContainer", {
    title:{
        text: "Diagramm"
    },
    data: [
        {
            // Change type to "doughnut", "line", "splineArea", etc.
            type: "column",
            dataPoints: [
                { label: "apple",  y: 10  },
                { label: "orange", y: 15  },
                { label: "banana", y: 25  },
                { label: "mango",  y: 30  },
                { label: "grape",  y: 28  }
            ]
        }
    ]
});
chart.render();
