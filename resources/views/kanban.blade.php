@extends('layouts.app')

@section('nav-header')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">leads</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

                <div class="board-bar row my-0">

                    <div class="col-12 itens-board-bar">
                         <!-- ? ONDE VAI O TITULO DO QUADRO - EM LEDAS FICA LEAD, EM OPORTUNIDADES O NOME DO QUADRO-->
                         <h3>Funil de Leads</h3>


                            <!-- ? USAR TUDO ABAIXO PARA OPORTUNIDADES -->
                            <!-- <span class="space-item-board-bar"> | </span>
                            <img src="trello-icon.png" style="width: auto; height: 25px;" class="rounded-circle avatar-xs" alt="Icone do Quadro">

                            <span class="chose-board"> Quadros </span>

                            <select class="form-control select2 select-board">
                                <option value="Escolha o Quadro">Escolha o Quadro</option>
                                <option value="Vendas Rastreamento">Vendas Rastreamento</option>
                                <option value="Vendas Payments">Vendas Payments</option>
                            </select>
                            <span class="space-item-board-bar"> | </span>
                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="Responsáve;"> -->
                    </div>

                </div>



                    <!-- ?  ------------------------------------   -->
                    <!-- ?  CSS PARA ROLAR A TELA   -->

                <!-- ?  div master   -->
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
                                    onSort({to}){
                                        const groupIds = Array.from(to.children).map(item => item.getAttribute('group-id'))
                                        console.log('group ids 1', groupIds)
                                    }  
                                    {{-- handle:'.image-test' --}}
                                    })">

                                        <div class="card task-box" style="border-radius: 10px;" group-id="1">
                                    
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #FF3838;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #891BE8;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- *    IMAGEM DE CAPA    -->

                                                <a class="image-popup-no-margins" href="photo.png">                                                
                                                    <img class="img-fluid img-card-banner image-test" alt="" src="photo.png" width="75">
                                                </a>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        SP
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            Car System
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Facebook</li>
                                                        <li class="py-1 li-style">CNPJ</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1 " alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->

                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end task card -->

                                        
                                        <div class="card task-box" style="border-radius: 10px;" group-id="2">
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        RJ
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            João França
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Website</li>
                                                        <li class="py-1 li-style">CPF</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->
                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                                                            

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
                                        console.log('group ids 2', groupIds)
                                     }  
                                    {{-- handle:'.image-test' --}}
                                  })">

                                        <div class="card task-box" style="border-radius: 10px;" group-id="3">
                                     
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #FF3838;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #891BE8;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- *    IMAGEM DE CAPA    -->

                                                <a class="image-popup-no-margins" href="photo.png">                                                
                                                    <img class="img-fluid img-card-banner image-test" alt="" src="photo.png" width="75">
                                                </a>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        SP
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            Car System
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Facebook</li>
                                                        <li class="py-1 li-style">CNPJ</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1 " alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->

                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end task card -->

                                        
                                        <div class="card task-box" style="border-radius: 10px;" group-id="4">
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        RJ
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            João França
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Website</li>
                                                        <li class="py-1 li-style">CPF</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->
                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                                                               

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
                                        console.log('group ids 3', groupIds)
                                     }  
                                    {{-- handle:'.image-test' --}}
                                    })">

                                        <div class="card task-box" style="border-radius: 10px;" group-id="5">
                                     
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #FF3838;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #891BE8;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- *    IMAGEM DE CAPA    -->

                                                <a class="image-popup-no-margins" href="photo.png">                                                
                                                    <img class="img-fluid img-card-banner image-test" alt="" src="photo.png" width="75">
                                                </a>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        SP
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            Car System
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Facebook</li>
                                                        <li class="py-1 li-style">CNPJ</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1 " alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->

                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end task card -->

                                        
                                        <div class="card task-box" style="border-radius: 10px;" group-id="6">
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        RJ
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            João França
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Website</li>
                                                        <li class="py-1 li-style">CPF</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->
                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                                                               

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
                                        console.log('group ids 4', groupIds)
                                     }  
                                    {{-- handle:'.image-test' --}}
                                  })">

                                        <div class="card task-box" style="border-radius: 10px;" group-id="7">
                                     
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #FF3838;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #891BE8;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- *    IMAGEM DE CAPA    -->

                                                <a class="image-popup-no-margins" href="photo.png">                                                
                                                    <img class="img-fluid img-card-banner image-test" alt="" src="photo.png" width="75">
                                                </a>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        SP
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            Car System
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Facebook</li>
                                                        <li class="py-1 li-style">CNPJ</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1 " alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->

                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- end task card -->

                                        
                                        <div class="card task-box" style="border-radius: 10px;" group-id="8">
                                            <div class="card-body">

                                                <!-- !    TAGS COLORIDAS    -->

                                                <div class="row">
                                                    <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
                                                    <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
                                                </div>

                                                <!-- ?   REGIAO    -->

                                                <div class="float-right ml-2">
                                                    <span class="badge badge-pill badge-soft-primary font-size-12">
                                                        RJ
                                                    </span>
                                                </div>

                                                <!-- !  INFOS DO LEAD   -->

                                                <div>
                                                    <h5 class="font-size-15">
                                                        <a href="javascript: void(0);" class="text-dark">
                                                            João França
                                                        </a>
                                                    </h5>
                                                    <ul class="pl-3 mb-4 text-muted">
                                                        <li class="py-1 li-style">Contato Pendente</li>
                                                        <li class="py-1 li-style">Website</li>
                                                        <li class="py-1 li-style">CPF</li>
                                                    </ul>
                                                </div>

                                                <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

                                                <div class="team float-left">

                                                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="Responsáve;">


                                                    <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

                                                    <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


                                                    <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                                                        <span class="avatar-title rounded-circle bg-primary text-white">
                                                            3 +
                                                        </span>
                                                    </div> -->
                                                </div>

                                                <!-- <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">R$ 145,00</h5>
                                                    <p class="mb-0 text-muted">Valor Total</p>
                                                </div> -->
                                                <div class="text-right">
                                                    <h5 class="font-size-15 mb-1">20/05/2022</h5>
                                                    <p class="mb-0 text-muted">Inserção</p>
                                                </div>
                                            </div>

                                        </div>
                                                                               

                                    </div>
                            </div>
                            
                        </div>
                        {{--  fim  coluna--}}

 
                </div>
                <!-- ?  end -> div master   -->

@endsection


@push('script-js')

   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>  --}}

   {{-- <script>
       window.Sortablejs = sortablejs;
   </script> --}}

   <script>
    //   var el = document.getElementById('teste');
    //   var Sortable = Sortable.create(el);

        console.log(Sortable)
   </script>

    <!-- dragula plugins -->
    <script src="{{asset('assets/libs/dragula/dragula.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/task-kanban.init.js')}}"></script>

    <!-- Magnific Popup-->
    <script src="{{asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Tour init js-->
    <script src="{{asset('assets/js/pages/lightbox.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
    <!-- form advanced init -->
    <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
       
@endpush

@push('customized-js')
  
@endpush


                                       
                                  