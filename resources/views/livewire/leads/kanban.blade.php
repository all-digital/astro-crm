
<div class="row" style="flex-wrap: nowrap; overflow-x: scroll;">                     
  
                           
    <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3">
        <div class="card card-collun-title">
            <div class="card-body">                          
                <!-- !  ------------------------------------   -->
                <!-- !  TITULO DA COLUNA   -->
                <h4 class="card-title mb-4" style="color: white;">Perdido</h4>

                <div class="extra-info row">

                    <div class="col-6 cards-qtd">0 Leads</div>

                    <!-- TODO: PARA OPORTUNIDADES, UTILIZAR OS CARDS ABAIXO -->

                    <!-- <div class="col-6 cards-qtd">0 Cards</div>

                    <div class="col-6 income">R$ 0,00</div> -->

                </div>
            </div>
        </div>

    
        <div class="card board-cards " style="width: 321px; padding: 0px;" >

                <div class="card new-card" style="border-radius: 10px;">
                    <div class="card-body">
                        {{-- <p>+ Add Novo Lead</p> --}}
                        <!-- TODO: Para a tela de Oportunidade, considerar este texto <p>+ Add Nova Oportunidade</p> -->
                        <button type="button" class="btn  waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#modalLeadPerdido">+ Add Novo Lead</button>
                    </div>
                </div>
            
                <div id="pending_contact" class="pb-1 task-list"  x-data x-init="Sortable.create($el,{
                    animation:150,
                    group:{
                        name:'lista',
                        pull:true,
                        put:true
                    },  
                    {{-- draggable:'.nao',  --}}
                                  
                    {{-- onSort({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        console.log('group ids Pedido', groupIds)   
                        
                        @this.pedido(groupIds)
                    },   --}}
                    
                    onRemove(event){
                        const groupIds = event.item.getAttribute('group-id')
                        console.log('onRemove -->> Perdido ',groupIds)

                            {{-- @this.pedidoRemove(groupIds)                        
                         console.log(event) --}}                        
                    },
                    
                    onChange({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        
                        console.log('onChange -> perdido',groupIds) 
                        
                        @this.pedido(groupIds)
                    },            

                    })">

                    @foreach ($Pedido as $item)
                      @include('components.leads.leads',['groupId' => $item['id'], 'name'=>$item['name']]) 
                    @endforeach    
                   
                </div>
        </div>
        
    </div>
    {{--  fim  coluna--}}

    <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3">
        <div class="card card-collun-title">
            <div class="card-body">                          
                <!-- !  ------------------------------------   -->
                <!-- !  TITULO DA COLUNA   -->
                <h4 class="card-title mb-4" style="color: white;">Contato Pendente</h4>

                <div class="extra-info row">

                    <div class="col-6 cards-qtd">0 Leads</div>

                    <!-- TODO: PARA OPORTUNIDADES, UTILIZAR OS CARDS ABAIXO -->

                    <!-- <div class="col-6 cards-qtd">0 Cards</div>

                    <div class="col-6 income">R$ 0,00</div> -->
                </div>
            </div>
        </div>
    
        <div class="card board-cards " style="width: 321px;" >

                <div class="card new-card " style="border-radius: 10px;">
                    <div class="card-body">
                        <button type="button" class="btn  waves-effect waves-light"
                        data-bs-toggle="modal" data-bs-target="#modalLeadContatoPendente">+ Add Novo Lead</button>
                        <!-- TODO: Para a tela de Oportunidade, considerar este texto <p>+ Add Nova Oportunidade</p> -->
                    </div>
                </div>
            

                <div id="pending_contact" class="pb-1 task-list"  x-data x-init="Sortable.create($el,{
                animation:150,
                group:{
                    name:'lista',
                    pull:true,
                    put:true
                },
                {{-- onSort({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        console.log('group ids Pedido', groupIds)   
                        
                        @this.pedido(groupIds)
                    },   --}}
                    
                    onRemove(event){
                        const groupIds = event.item.getAttribute('group-id')
                        console.log('onRemove -->> ContatoPendente ',groupIds)

                            {{-- @this.pedidoRemove(groupIds)                        
                         console.log(event) --}}                        
                    },
                    
                    onChange({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        
                        console.log('onChange -> ContatoPendente',groupIds) 
                        
                        @this.contatoPendente(groupIds)
                    }, 

              })">

               
                @foreach ($ContatoPendente as $item)
                  @include('components.leads.leads',['groupId' => $item['id'], 'name'=>$item['name']]) 
                @endforeach                              
                                           
                </div>
        </div>
        
    </div>
    {{--  fim  coluna--}}
   
    
    <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3">
        <div class="card card-collun-title">
            <div class="card-body">                          
                <!-- !  ------------------------------------   -->
                <!-- !  TITULO DA COLUNA   -->
                <h4 class="card-title mb-4" style="color: white;">Aguardando Retorno</h4>

                <div class="extra-info row">

                    <div class="col-6 cards-qtd">0 Leads</div>

                    <!-- TODO: PARA OPORTUNIDADES, UTILIZAR OS CARDS ABAIXO -->

                    <!-- <div class="col-6 cards-qtd">0 Cards</div>

                    <div class="col-6 income">R$ 0,00</div> -->

                </div>
            </div>
        </div>

    
        <div class="card board-cards " style="width: 321px;" >

                <div class="card new-card " style="border-radius: 10px;">
                    <div class="card-body">
                        <button type="button" class="btn  waves-effect waves-light"
                        data-bs-toggle="modal" data-bs-target="#modalLeadAguardandoRetorno">+ Add Novo Lead</button>
                        <!-- TODO: Para a tela de Oportunidade, considerar este texto <p>+ Add Nova Oportunidade</p> -->
                    </div>
                </div>            

                <div id="pending_contact" class="pb-1 task-list"  x-data x-init="Sortable.create($el,{
                animation:150,
                group:{
                    name:'lista',
                    pull:true,
                    put:true
                },
                    onRemove(event){
                        const groupIds = event.item.getAttribute('group-id')
                        console.log('onRemove -->> AguardandoRetorno ',groupIds)

                            {{-- @this.pedidoRemove(groupIds)                        
                        console.log(event) --}}                        
                    },
                    
                    onChange({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        
                        console.log('onChange -> AguardandoRetorno',groupIds) 
                        
                        @this.aguardandoRetorno(groupIds)
                    }, 

                })">

            @foreach ($AguardandoRetorno as $item)
              @include('components.leads.leads',['groupId' => $item['id'], 'name'=>$item['name']]) 
            @endforeach 
            
                </div>
        </div>
        
    </div>
    {{--  fim  coluna--}}


    <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3">
        <div class="card card-collun-title">
            <div class="card-body">                          
                <!-- !  ------------------------------------   -->
                <!-- !  TITULO DA COLUNA   -->
                <h4 class="card-title mb-4" style="color: white;">Convertido</h4>
                <div class="extra-info row">

                    <div class="col-6 cards-qtd">0 Leads</div>

                    <!-- TODO: PARA OPORTUNIDADES, UTILIZAR OS CARDS ABAIXO -->

                    <!-- <div class="col-6 cards-qtd">0 Cards</div>

                    <div class="col-6 income">R$ 0,00</div> -->

                </div>
            </div>
        </div>

    
        <div class="card board-cards " style="width: 321px;" >

                <div class="card new-card " style="border-radius: 10px;">
                    <div class="card-body">
                        <button type="button" class="btn  waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#modalLeadConvertido">+ Add Novo Lead</button>
                        <!-- TODO: Para a tela de Oportunidade, considerar este texto <p>+ Add Nova Oportunidade</p> -->
                    </div>
                </div>            

                <div id="pending_contact" class="pb-1 task-list"  x-data x-init="Sortable.create($el,{
                animation:150,
                group:{
                    name:'lista',
                    pull:true,
                    put:true
                },
                    onRemove(event){
                        const groupIds = event.item.getAttribute('group-id')
                        console.log('onRemove -->> Convertido ',groupIds)

                            {{-- @this.pedidoRemove(groupIds)                        
                        console.log(event) --}}                        
                    },
                    
                    onChange({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        
                        console.log('onChange -> Convertido',groupIds) 
                        
                        @this.convertido(groupIds)
                    }, 
                })">

              @foreach ($Convertido as $item)
                @include('components.leads.leads',['groupId' => $item['id'], 'name'=>$item['name']]) 
              @endforeach  
                                                           
                </div>
        </div>
        
    </div>
    {{--  fim  coluna--}}


</div>
