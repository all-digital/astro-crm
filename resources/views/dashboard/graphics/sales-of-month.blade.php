<div class="col-md-6">
    <div class="card"     
     x-data="app()"
     x-init="api()"                       
    >
    {{-- end div x-data --}}

        <div class="card-body" >
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2" x-text="title"></p>                      
                        <h4 id="d-value" x-on:click="show = !show"></h4>                        
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
                value:"",
                title:'Vendas do Mês',                
                ref(){
                    //posso facilmente add uma class ou algo em alguma tag para sumir ou algo do tipo.....
                    console.log(this.$refs.darcio.innerHTML)
                },
                console(){
                    console.log('entrei no app')
                }              
            }
        }   
          
        // document.addEventListener('alpine:initialized', () => {
        
        //     console.log("alpine:initialized")
        //     //graphic()
        //     api()            
        // })

                
       function api(){

        fetch('api/teste',{ 
            method:'post',        
            body: JSON.stringify(),
            headers:{"Content-type":"application/json"}
            })            
            .then(res=> res.json())
            .then(res => { 

                console.log(res)
                graphic(res.series)
                document.querySelector('#d-value').innerText  = res.value
                
                
            })
            .catch((e)=> console.log("erro api => ", e))

       }

       function update(){
           console.log(this.$refs.darcio)
       }

       function graphic(series)
        {
            var options = {
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
