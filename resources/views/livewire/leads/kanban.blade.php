
<div class="row" style="flex-wrap: nowrap; overflow-x: scroll;">                     
  
                           
    <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3">

        <div class="card card-collun-title">

            <div class="card-body">                          
                <!-- !  ------------------------------------   -->
                <!-- !  TITULO DA COLUNA   -->
                <h4 class="card-title mb-4" style="color: white;">Pedido</h4>

                <div class="extra-info row">

                    <div class="col-6 cards-qtd">0 Leads</div>

                    <!-- TODO: PARA OPORTUNIDADES, UTILIZAR OS CARDS ABAIXO -->

                    <!-- <div class="col-6 cards-qtd">0 Cards</div>

                    <div class="col-6 income">R$ 0,00</div> -->

                </div>

            </div>


        </div>

    
        <div class="card board-cards " style="width: 321px; padding: 0px;" >


                <div class="card new-card " style="border-radius: 10px;">
                    <div class="card-body">
                        <p>+ Add Novo Lead</p>
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
                    {{-- onRemove(event){
                        const groupIds = Array.from(event.to.children).map(item => item.getAttribute('group-id'))
                        console.log('onRemove Pedido ',groupIds)

                        @this.pedidoonRemove(groupIds)
                    }, --}}

                    onSort({to}){
                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                        console.log('group ids Pedido', groupIds)   
                        
                        @this.pedido(groupIds)
                    },  

                    {{-- onUpdate(event){q
                        const groupIds = Array.from(event.to.children).map(item => item.getAttribute('group-id'))
                        console.log('onUpdate->Pedido ',groupIds)
                    }     --}}

                    {{-- handle:'.image-test' --}}


                    })">

                    @foreach ($Pedido as $item)
                        @livewire('leads.lead',['groupId' => $item['id'], 'name'=>$item['name']]) 
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
                        <p>+ Add Novo Lead</p>
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
                  onSort({to}){
                    const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                    console.log('group ids Contato Pendente', groupIds)

                    @this.contatoPendente(groupIds)
                 },
                 {{-- onRemove(event){
                    const groupIds = Array.from(event.to.children).map(item => item.getAttribute('group-id'))
                    console.log('onRemove Contato Pendente ',groupIds)
                } --}}
                 {{-- onUpdate(event){
                    const groupIds = Array.from(event.to.children).map(item => item.getAttribute('group-id'))
                    console.log('onUpdate->Contato Pendente ',groupIds)
                }    --}}
                {{-- handle:'.image-test' --}}

              })">

                   {{-- <livewire:leads.lead></livewire:leads.lead> --}}
                @foreach ($ContatoPendente as $item)
                   @livewire('leads.lead',['groupId' => $item['id'], 'name'=>$item['name']]) 
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
                        <p>+ Add Novo Lead</p>
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
                  onSort({to}){
                    const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                    console.log('group ids Aguardando Retorno', groupIds)

                    @this.aguardandoRetorno(groupIds)
                 }  
                {{-- handle:'.image-test' --}}
                })">

            @foreach ($AguardandoRetorno as $item)
                @livewire('leads.lead',['groupId' => $item['id'], 'name'=>$item['name']]) 
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
                        <p>+ Add Novo Lead</p>
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
                  onSort({to}){
                    const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                    console.log('group ids Convertido', groupIds)

                    @this.convertido(groupIds)
                 }  
                {{-- handle:'.image-test' --}}
              })">

              @foreach ($Convertido as $item)
                @livewire('leads.lead',['groupId' => $item['id'], 'name'=>$item['name']]) 
              @endforeach  
                                                           

                </div>
        </div>
        
    </div>
    {{--  fim  coluna--}}


</div>
