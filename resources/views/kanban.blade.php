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


@php    
    $Pedido = [['name'=>'darcio', 'id'=>1],['name'=>'Murilo', 'id'=>2]];
    $ContatoPendente = [['name'=>'Fabiana', 'id'=>3],['name'=>'darcio', 'id'=>4]];
    $AguardandoRetorno = [['name'=>'Murilo', 'id'=>5],['name'=>'darcio', 'id'=>6],['name'=>'Murilo', 'id'=>7]];
    $Convertido = [['name'=>'darcio', 'id'=>8]];
@endphp

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
                @livewire('leads.kanban',['Pedido'=>$Pedido,'ContatoPendente'=>$ContatoPendente,'AguardandoRetorno'=>$AguardandoRetorno,'Convertido'=>$Convertido])  
                <!-- ?  end -> div master   -->


                {{-- modal para criaçao de um card --}}
                <div id="modalLead" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myModalLabel">NOVO SERVIÇO
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
        
                                        <div class="mb-3 row" style="justify-content: center;">
                                            <label for="example-text-input"
                                                class="col-md-3 col-form-label">Empresa</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" value="{{Auth::user()->companie}}"
                                                    id="example-text-input" readonly>
                                            </div>
                                        </div>
        
                                        <div class="mb-3 row" style="justify-content: center;">
                                            <label for="example-search-input"
                                                class="col-md-3 col-form-label">Status</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="search" value="Ativo"
                                                    id="add-status" readonly>
                                            </div>
                                        </div>
        
                                        <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-email-input"
                                                class="col-md-3 col-form-label">Usuário</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" value={{Auth::user()->name}}
                                                    id="example-email-input" required readonly>
                                            </div>
        
                                        </div>
        
                                        <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-url-input" class="col-md-3 col-form-label">Data
                                                de Inserção</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="url" value={{date("d/m/Y")}}
                                                    id="add-date-created" readonly>
                                            </div>
        
                                        </div>
        
                                        <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-email-input"
                                                class="col-md-3 col-form-label">Categoria</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="add-category"
                                                    required >
                                            </div>
        
                                        </div>
        
                                        <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-url-input"
                                                class="col-md-3 col-form-label">Título do Serviço</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="add-name-service"
                                                    required>
                                            </div>
        
                                        </div>
        
                                        
                                        {{-- <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-email-input"
                                                class="col-md-3 col-form-label">Frequência</label>
                                            <div class="col-md-7">
                                                <select class="form-control select2" type="text" id="add-frequencia"
                                                    required>
                                                <option value="Selecionar">Selecionar</option>
                                                <option value="Avulso">Avulso</option>
                                                <option value="Recorrente">Recorrente</option>
                                                </select>
                                            </div>
        
                                        </div> --}}
        
                                        <div class="mb-3 row" style="justify-content: center;">
        
                                            <label for="example-email-input"
                                                class="col-md-3 col-form-label">Preço</label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="add-price"
                                                    required>
                                            </div>
        
                                        </div>
        
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger waves-effect waves-light"
                                data-bs-dismiss="modal">CANCELAR</button>
                            <button type="button" id="btn-register" class="btn btn-success waves-effect waves-light">CADASTRAR</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

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

        // console.log(Sortable)
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


                                       
                                  