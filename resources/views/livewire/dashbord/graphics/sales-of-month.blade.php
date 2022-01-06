<div class="col-md-6">
    <div class="card" x-data="{show:false}" x-init="">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2">Vendas do Mês</p>
                        <h4 wire:click="$set('valor',+1)">{{$valor}}</h4>                        
                        {{-- <h4 x-on:click="@this.mudar('darcio')">{{$valor}}</h4> --}}
                        {{-- <h4>{{$valor}}</h4> --}}                        
                    </div>
                </div>

                <div class="col-4">
                    <div>
                        <div id="radial-chart-1"></div>
                    </div>
                </div>
            </div>

            <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
        </div>
    </div>
    <script>
        
        function myfunction()
        {
            alert('clicou no button')
        }

        // document.addEventListener("DOMContentLoaded", () => {

        //     graphic()
        //     Livewire.hook('element.updated', (el, component) => {console.log(el, component)})

        // })
        document.addEventListener("DOMContentLoaded", () => {

            Livewire.hook('component.initialized', (component) => {
                graphic()
                console.log("hook js livewire => component.initialized ")
            })

            Livewire.hook('element.initialized', (el, component) => {

                console.log("hook js livewire => element.initialized")
            })

        });

        function graphic()
        {
            var options = {
                    series: [20],
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
                                background: "rgba(253, 189, 24, .25)"
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
                                    colors: ["#fdbd18"]
                                }
                            }
                        }
                    },
                    colors: ["#fdbd18"]
                },
                chart = new ApexCharts(document.querySelector("#radial-chart-1"), options);
                chart.render();
        }
    
    
    </script>
</div>
