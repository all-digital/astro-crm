<div class="col-xl-6">
    <div class="card"
    x-data
    x-init="graphicAnnualPerformance()"
    >
        <div class="card-body">
            
            <h4 class="card-title mb-4">Performance Anual (2021)</h4>
            <div id="mixed-chart" class="apex-charts"></div>
        </div>
    </div>
    <script>

        // function apiAnnualPerformance()
        // {
        //     //
        // }

        function graphicAnnualPerformance()
        {
            options = {
            series: [{
                name: "Cancelamento",
                type: "column",
                data: [23, 11, 23, 27, 13, 19, 22, 7, 21, 44, 22, 30]
            }, {
                name: "Venda",
                type: "area",
                data: [36, 47, 33, 41, 22, 37, 43, 21, 41, 56, 27, 43]
            }, {
                name: "Faturamento",
                type: "line",
                data: [46, 57, 43, 51, 32, 47, 53, 31, 51, 66, 37, 53]
            }],
            chart: {
                height: 275,
                type: "line",
                stacked: !1,
                toolbar: {
                    show: !1
                }
            },
            stroke: {
                width: [0, 2, 2],
                curve: "smooth",
                dashArray: [0, 0, 4]
            },
            plotOptions: {
                bar: {
                    columnWidth: "15%",
                    endingShape: "rounded"
                }
            },
            fill: {
                opacity: [.85, .25, 1],
                gradient: {
                    inverseColors: !1,
                    shade: "light",
                    type: "vertical",
                    opacityFrom: .85,
                    opacityTo: .55,
                    stops: [0, 100, 100, 100]
                }
            },
            xaxis: {
                categories: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"]
            },
            colors: ["#ff0000", "#5fd195", "#3b5de7"],
            // colors: ["#3b5de7", "#eeb902", "#5fd195"],
            markers: {
                size: 0
            }
            };
            (chart = new ApexCharts(document.querySelector("#mixed-chart"), options)).render();
        }
    </script>
</div>