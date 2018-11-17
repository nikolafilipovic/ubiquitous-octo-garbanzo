jQuery(document).ready(function() {
  var elem = document.getElementById('lh-chart');
  if(!elem) return;

    var ctx = elem.getContext('2d');


     function drawChartText(chart, text, fontOpts) {
        if(!fontOpts) fontOpts = {};
        var width = chart.chart.width,
        height = chart.chart.height,
        ctx = chart.chart.ctx, 
        fontSize = (height / 114).toFixed(2);

        font = "";
        font += (fontOpts.style || "normal") + " ";
        font += (fontOpts.weight || "normal") + " ";
        font += (fontOpts.size || fontSize + "em") + " ";
        font += "Graphik Regular, sans-serif";


        ctx.restore();
            ctx.font = font;
            ctx.textBaseline = "middle";

            var textX = Math.round(width / 2 - ctx.measureText(text).width/2),
                textY = height / 2;
                
        textY += fontOpts.offsetY || 0;
        ctx.fillText(text, textX, textY);
        ctx.save();
    }

     Chart.pluginService.register({
         beforeDraw: function(chart) { 
            drawChartText(chart, "$1,994", {weight: "bold", offsetY: 15});
            drawChartText(chart, "YOUR PAYMENT", {size: "1em", offsetY: -15});
        }
     });

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: [
                "P&I",
                "Insurace",
                "Taxes",
                "PMI",
                "HOA"
            ],
            datasets: [{
                data: [1642, 67, 226, 0, 60],
                backgroundColor: [
                    "#25aae1",
                    "#0075ed",
                    "#88d6f4",
                    "#6da2e4",
                    "#d3dff8"
                ],
                borderWidth: [0,0,0,0,0]
            }]
        },
        options: {
            legend: {
                display: false
            },
            cutoutPercentage: 85,
            tooltips: {
                callbacks: {
                    label: function(item, data) {
                        var label = data.labels[item.index];
                        var val   = data.datasets[0].data[item.index];
                        return label + ": $" + val;
                    }
                }
            }
        }
    });
});