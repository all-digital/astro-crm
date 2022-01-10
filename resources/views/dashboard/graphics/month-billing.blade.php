<div class="col-md-6">
    <div class="card"
    x-data
    x-init="apiMonthBilling()"
    >
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2">Faturamento do Mês</p>
                        <h4>R$ 303.750,00</h4>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <div id="radial-chart-4"></div>
                    </div>
                </div>
            </div>

            <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
        </div>
    </div>

    <script>

        function apiMonthBilling()
        {
            fetch('api/teste',{ 
            method:'POST',        
            body: JSON.stringify(),
            headers:{"Content-type":"application/json"}
            })            
            .then(res => res.json())
            .then(res => { 

                console.log(res," month billing")
                graphicMonthBilling(res.series)
                document.querySelector('#d-value').innerText  = res.value
                                
            })
            .catch((e)=> console.log("erro api => ", e))
        }

        function graphicMonthBilling(series)
        {
            options = {
            series: [series],
            chart: {
                height: 120,
                type: "radialBar"
            },
            plotOptions: {
                radialBar: {
                    offsetY: -12,
                    hollow: {
                        margin: 5,
                        size: "60%",
                        background: "rgba(69, 203, 133,  .25)"
                    },
                    dataLabels: {
                        name: {
                            show: !1
                        },
                        value: {
                            show: !0,
                            fontSize: "15px",
                            offsetY: 5
                        },
                        style: {
                            colors: ["#fff"]
                        }
                    }
                }
            },
            colors: ["#45CB85"]
            };

            (chart = new ApexCharts(document.querySelector("#radial-chart-4"), options)).render();

        }


    </script>
</div>