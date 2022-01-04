<div class="col-md-6">
    <div class="card" x-data="{show:false}">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div>
                        <p class="text-muted font-weight-medium mt-1 mb-2">Vendas do Mês</p>
                        <h4 x-on:click="show = !show">255</h4>     
                        <h4 x-show="show" x-on:click="myfunction()">100</h4>                     
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

    
    </script>
</div>
