<div class="col-md-6">
    <div class="card"
     {{-- x-data="{show:false, teste:'Vendas do Mês'}"  --}}
     x-data="app()"
     
     x-init="nome = initData('{{$array}}')"  
    
    >
    {{-- end div alpine --}}

        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2" x-text="teste"></p>                        
                        {{-- <h4 x-on:click="console.log(nome)">255</h4>  --}}
                        <h4 x-ref="darcio" x-on:click="show = !show" >255</h4> 
                        {{-- <h4 x-show="show" x-on:click="myfunction(name)" >dd</h4>   --}}
                        <h4 x-show="show" x-on:click="ref()" >dd</h4>                     
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
                    console.log(this.$refs.darcio)
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

        
       

    
    </script>
</div>
