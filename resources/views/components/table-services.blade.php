<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="section-title-page">
                    <h4 class="card-title"
                        style="margin-top: 10px; font-size: 16px; font-weight: bold;">SERVIÇOS</h4>
                    <div class="new-service-div">

                        <a href="{{ url('export-services') }}" class="btn btn-outline-success waves-effect waves-light">
                            <i class="mdi mdi-google-spreadsheet"></i>
                        </a>

                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target="#myModal">NOVO SERVIÇO</button>

                        <!-- <a href="new-service.html" target="_blank" class="btn btn-outline-info waves-effect waves-light">NOVO SERVIÇO</a> -->
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>                                
                                <th style="text-align: center;">Deletar</th>
                                <th style="text-align: center;">Editar</th>
                                <th style="text-align: center;">Empresa</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Usuário de Inserção</th>
                                <th style="text-align: center;">Data de Inserção</th>
                                <th style="text-align: center;">Categoria</th>
                                <th style="text-align: center;">Título do Serviço</th>
                                <th style="text-align: center;">Preço</th>
                                <th style="text-align: center;">Data da Última Alteração</th>
                                <th style="text-align: center;">Usuário da Última Alteração</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            

                            @foreach ($services as $service)
                                <tr data-id={{$service['id']}} >

                                    <td style="width: 100px">
                                        <center>
                                            <a class="btn btn-outline-secondary btn-sm delete"
                                                title="delete" id="trash{{$service['id']}}"
                                                
                                                onclick="trash({{$service['id']}},`{{$service['name'] }}` )"> 
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </center>
                                    </td>
                                    
                                    <td style="width: 100px">
                                        <center>
                                            <a class="btn btn-outline-secondary btn-sm edit"
                                                title="Editar" id="{{$service['id']}}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </center>
                                    </td>
                                                                          

                                        <td style="text-align: center;" id="employer{{$service['id']}}" data-employer data-field="employer"  >{{$service['company']}}</td>

                                        <td style="text-align: center;" id="status{{$service['id']}}" data-status data-field="status"  >{{$service['status']}}</td>

                                        <td style="text-align: center;" id="user{{$service['id']}}" data-user  data-field="user"  >{{$service['responsible_for_insert']}}</td>

                                        <td style="text-align: center;" id="date{{$service['id']}}" data-date data-field="date"  >{{$service['updated_at']}}</td>

                                        <td style="text-align: center;" id="category{{$service['id']}}" data-category  data-field="category"  >{{$service['category']}}</td>

                                        <td style="text-align: center;" id="title{{$service['id']}}" data-title   data-field="title"  >{{$service['name']}}</td>

                                        <td style="text-align: center;" id="price{{$service['id']}}" data-price price data-field="price"  >{{$service['price']}}</td>

                                        <td style="text-align: center;" id="date-lastchange{{$service['id']}}" data-date-lastchange data-field="date-lastchange"> {{$service['updated_at']}}</td>

                                        <td style="text-align: center;" id="user-lastchange{{$service['id']}}" data-user-lastchange data-field="user-lastchange">{{Auth::user()->name}}</td>                                   
                                </tr>
                            
                            @endforeach


                        </tbody>

                    </table>

                    <div class="mt-3">
                        {{-- {{ $services->count() }} --}}
                        <ul class="pagination justify-content-center mb-0">
                            {{-- <li class="page-item">
                                <a class="page-link" href="#">Anterior</a>
                            </li> --}}
                            {{-- <li class="page-item"><a class="page-link">{{ $services->currentPage()}}</a></li>
                            <li class="page-item active"><a class="page-link" >{{ $services->nextPageUrl()}}</a></li> --}}
                            {{-- <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li> --}}
                            
                            <li class="m-3"><a> {{ $services->links() }} </a> </li> 
                            {{-- <li class="m-3"> Total {{ $services->perPage()}} </li>  --}}                            
                            {{-- <span class="m-3">total {{ $services->total() }} </span> --}}
                        </ul>
                        <style>
                            /* .w-5{
                                display: none;
                            } */
                        </style>
                    </div>
                </div>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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

                            
                            <div class="mb-3 row" style="justify-content: center;">

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

                            </div>

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

    <div id="modal-loading" class="modal-container-loading to-hide">
        <div class="c-loading"> </div>
    </div>

<!-- /.modal -->
</div>
{{-- <script src="{{'assets\libs\inputmask\min\jquery.inputmask.bundle.min.js'}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    
        window.onload = function() {

            //// ref a parte de registro de serviço
            let addMaskPrice = document.getElementById('add-price')

            console.log(addMaskPrice)
            let im_addPrice = new Inputmask( 'currency',{"autoUnmask": false,
                radixPoint:",",
                    groupSeparator: ".",
                    allowMinus: false,
                    prefix: ' R$ ',            
                    digits: 2,
                    digitsOptional: false,
                    rightAlign: false,
                    unmaskAsNumber: false                                
            });
            im_addPrice.mask(addMaskPrice)

            
        }//end function window.onload

        

        //// ref table-edits
        $(function(){
            var e={};
            $(".table-edits tr").editable({
                
                    dropdowns:{
                        status:["Ativo","Inativo"]                    
                    },
                
                    edit:function(values){
                        $(".edit i",this)
                            .removeClass("fa-pencil-alt")
                            .addClass("fa-save")
                            .attr("title","Save")
        


                        let employer = document.querySelector('[data-employer ] > input')
                        employer.setAttribute("style","background-color: #ffdddd;")
                        employer.readOnly = true;

                        let price = document.querySelector('[data-price ] > input')
                        // price.setAttribute("style","background-color: #ffdddd;")
                        // price.readOnly = true;

                        let userLastchange = document.querySelector('[data-user-lastchange ] > input')
                        userLastchange.setAttribute("style","background-color: #ffdddd;")
                        userLastchange.readOnly = true;

                        let user = document.querySelector('[data-user] > input')
                        user.setAttribute("style","background-color: #ffdddd;")
                        user.readOnly = true;

                        let  date = document.querySelector('[data-date] > input')
                        date.setAttribute("style","background-color: #ffdddd;")
                        date.readOnly = true;

                        let  dateLastchange = document.querySelector('[data-date-lastchange] > input')
                        dateLastchange.setAttribute("style","background-color: #ffdddd;")
                        dateLastchange.readOnly = true;

                        

                                               
                        let im_addPrice = new Inputmask( 'currency',{"autoUnmask": false,
                            radixPoint:",",
                                groupSeparator: ".",
                                allowMinus: false,
                                prefix: ' R$ ',            
                                digits: 2,
                                digitsOptional: false,
                                rightAlign: false,
                                unmaskAsNumber: false                                
                            });
                        im_addPrice.mask(price)

                          
                        
                    },//end edit
                    
                    save:function(values){
                        $(".edit i",this)
                        .removeClass("fa-save")
                        .addClass("fa-pencil-alt")
                        .attr("title","Edit"),
                        this in e&&(e[this].destroy(),delete e[this])



                        console.log(values)
                     
                        
                    
                    },//end save
                                              
                   
            })//end  table-edits 


        })//end 


        //// table-edits => bnt de excluir
        function trash(id, titleService)
        {
            Swal.fire({
                title: `Serviço ${titleService}` ,
                text: "Tem certeza que deseja excluir esse serviço ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
                }).then((result) => {



                    if (result.isConfirmed) {
                        Swal.fire(
                        'Concluido!',
                        'Deletado com succeso!',
                        'success'
                        )

                        location.reload()

                    }

            })            

        }//end function

      



        //// ref a parte de novo serviço

        register = document.getElementById('btn-register')

        register.addEventListener("click", function(e){
            e.preventDefault()





            ///////////////////////////////////

            let addStatus = document.getElementById('add-status')
            let addCategory = document.getElementById('add-category')
            let addService = document.getElementById('add-name-service')
            let addPrice = document.getElementById('add-price')

            let add = {
                "addStatus" : addStatus.value,
                "addCategory" : addCategory.value,
                "addService" : addService.value,
                "addPrice" : addPrice.value
            }

            // validando campos
            // !!add.exemplo => se estiver vazio false

            if(! (!!add.addCategory.trim() )){            
                addCategory.setAttribute("style","background-color: #ffdddd;")
            }else{
                addCategory.removeAttribute("style")
            }

            if(! (!!add.addService.trim() )){            
                addService.setAttribute("style","background-color: #ffdddd;")
            }else{
                addService.removeAttribute("style")
            }

            if(! (!!add.addPrice.trim() )){            
                addPrice.setAttribute("style","background-color: #ffdddd;")
            }else{
                addPrice.removeAttribute("style")
            }

            if(! (addCategory.hasAttribute("style") || addService.hasAttribute("style") || addPrice.hasAttribute("style")) )
            {
                let loading = document.getElementById("modal-loading")
                loading.classList.remove('to-hide')

                fetch('api/tabela-add',{ 
                    method:'post',        
                    body: JSON.stringify(add),
                    headers:{"Content-type":"application/json"}
                    })            
                    .then(res=> res.json())
                    .then(res => { 
                        
                        console.log(res)
                        location.reload()
                    
                    })
                    .catch((e)=> {console.log("erro => ", e)} )

            }



})//end function
       

</script>    