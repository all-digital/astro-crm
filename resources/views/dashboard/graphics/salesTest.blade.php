@php
    $name = "dss"
@endphp
<div class="col-md-6">
    <div class="card"
     {{-- x-data="{show:false, teste:'Vendas do Mês'}"  --}}
     x-data="app()"     
     x-init="nome = initData('{{$array}}')"          
    >
    {{-- end div x-data --}}

        <div class="card-body" x-init="graphic" >
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2" x-text="teste"></p>                        
                        {{-- <h4 x-on:click="console.log(nome)">255</h4>  --}}
                        <h4 x-ref="darcio" x-on:click="show = !show" >255</h4> 
                        <h4 x-show="show" x-on:click="myfunction(name)" >dd</h4>  
                        {{-- <h4 x-show="show" x-on:click="ref()" >dd</h4>                      --}}
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

        function app(){
            return {
                show:false,
                teste:'Vendas do Mês',                
                ref(){
                    //posso facilmente add uma class ou algo em alguma tag para sumir ou algo do tipo.....
                    console.log(this.$refs.darcio.innerHTML)
                }              
            }
        }
        
        function myfunction(name)
        {      
            console.log("test =>",name)      
            alert('clicou no button ', name)
            
        }

        function initData(a){

            a = JSON.parse(a)
            
            return a
            
        }


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


        document.addEventListener('alpine:initialized', () => {
        
            console.log("alpine:initialized")
            //graphic()
            
        })

        // document.addEventListener('alpine:init', () => {
        //     Alpine.data('alpine', () => {
               
        //             console.log(" sera q veio ????")
                
        //     })
        //     // console.log(" sera q veio ????")
        // })
        
       

    
    </script>
</div>
