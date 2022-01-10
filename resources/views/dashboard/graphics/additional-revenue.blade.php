<div class="col-md-6" >
    <div class="card"
    x-data=""
    x-init="apiAddRevenue()" 
    >
    {{-- end div x-data --}}

        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2">Receita Adicional</p>
                        <h4 >R$ 34.000,00</h4>
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <div id="radial-chart-2"></div>
                    </div>
                </div>
            </div>

            <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
        </div>
    </div>
    <script>



        function apiAddRevenue(){

        fetch('api/teste',{ 
            method:'POST',        
            body: JSON.stringify(),
            headers:{"Content-type":"application/json"}
            })            
            .then(res => res.json())
            .then(res => { 

                console.log(res, " additional")
                graphicAddRevenue(res.series)
                // document.querySelector('#d-value').innerText  = res.value
                                
            })
            .catch((e)=> console.log("erro api => ", e))

        }



        function graphicAddRevenue(series)
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
                        background: "rgba(59, 93, 231, .25)"
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
            colors: ["#3b5de7"]
            };
            chart = new ApexCharts(document.querySelector("#radial-chart-2"), options);
            chart.render();
        }

    </script>
</div>