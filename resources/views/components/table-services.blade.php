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

                {{-- @php
                    $services = [ 
                        [
                            "id" => 1
                        "company" => "Bailey, Hills and Littel"
                        "status" => "status"
                        "category" => "Kunde"
                        "name" => "Michel Dickens Jr."
                        "price" => "120,00"
                        "responsible_for_insert" => "Marcia Bernier"
                        "company_id" => 1

                        "updated_at" => "2022-01-25T16:39:30.000000Z"
                        "Usuário da Última Alteração" => "02/03/0333"
                         ],

                         [
                            "id"=> '2',
                        "Empresa"=> 'empresa S.A 22222',
                        "Status" => 'status ok',
                        "Usuário de Inserção" => "clessio",
                        "Data de Inserção" => "01/01/2022",
                        "Categoria"=> "catgoria top",
                        "Título do Serviço" => "serviço de chip",
                        "Preço" => "200,30",
                        "Data da Última Alteração"=> "03/02/2022",
                        "Usuário da Última Alteração" => "02/03/0333"
                        ],

                        [
                            "id"=> '3',
                        "Empresa"=> 'empresa S.A 33333',
                        "Status" => 'status ok',
                        "Usuário de Inserção" => "ana",
                        "Data de Inserção" => "01/01/2022",
                        "Categoria"=> "catgoria top",
                        "Título do Serviço" => "serviço de chip",
                        "Preço" => "200,30",
                        "Data da Última Alteração"=> "03/02/2022",
                        "Usuário da Última Alteração" => "02/03/0333"
                        ]
                    ]
                @endphp --}}


                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>
                                {{-- <th style="text-align: center;">Excluir</th> --}}
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
                            {{-- {{dd($servivos)}} --}}

                            @foreach ($services as $service)
                                <tr data-id="1">
                                    
                                    <td style="width: 100px">
                                        <center>
                                            <a class="btn btn-outline-secondary btn-sm edit"
                                                title="Editar" id="{{$service['id']}}" onclick="edit({{$service['id'] }}, this)" >
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </center>
                                    </td>

                                    {{-- <td style="width: 100px">
                                        <center>
                                            <a class="btn btn-outline-secondary btn-sm edit"
                                                title="Editar" id="{{$service['id']}}" onclick="edit({{$service['id'] }}, this)" >
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </center>
                                    </td> --}}
                                    
                                        <td style="text-align: center;" id="employer{{$service['id']}}" data-employer data-field="employer{{$service['id']}}" ondblclick="editInput()" >{{$service['company']}}</td>

                                        <td style="text-align: center;" id="status{{$service['id']}}" data-field="status{{$service['id']}}" ondblclick="editInput()" >{{$service['status']}}</td>

                                        <td style="text-align: center;" id="user{{$service['id']}}" data-field="user{{$service['id']}}" ondblclick="editInput()" >{{$service['responsible_for_insert']}}</td>

                                        <td style="text-align: center;" id="date{{$service['id']}}" data-field="date{{$service['id']}}" ondblclick="editInput()" >{{$service['updated_at']}}</td>

                                        <td style="text-align: center;" id="category{{$service['id']}}" data-field="category{{$service['id']}}" ondblclick="editInput()" >{{$service['category']}}</td>

                                        <td style="text-align: center;" id="title{{$service['id']}}" data-field="title{{$service['id']}}" ondblclick="editInput()" >{{$service['name']}}</td>

                                        <td style="text-align: center;" id="price{{$service['id']}}" price data-field="price{{$service['id']}}" ondblclick="editInput()" >{{$service['price']}}</td>

                                        <td style="text-align: center;" id="date-lastchange{{$service['id']}}" data-field="date-lastchange{{$service['id']}}" ondblclick="editInput()" >{{$service['updated_at']}}</td>

                                        <td style="text-align: center;" id="user-lastchange{{$service['id']}}" data-field="user-lastchange{{$service['id']}}" ondblclick="editInput()" >{{Auth::user()->name}}</td>
                                   

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
                <button type="button" id="btn-cadastrar" class="btn btn-success waves-effect waves-light">CADASTRAR</button>
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

<script>
          

    window.onload = function() {
        let inputPrice = document.querySelectorAll('[price]') 

        inputPrice = Array.from(inputPrice)
        // console.log(inputPrice[0].innerText)                        

        let im_price = new Inputmask( 'currency',{"autoUnmask": false,
               radixPoint:",",
                groupSeparator: ".",
                allowMinus: false,
                prefix: ' R$ ',            
                digits: 2,
                digitsOptional: false,
                rightAlign: false,
                unmaskAsNumber: false
                                
        });

        inputPrice.forEach((input, i )=> {

            console.log(input.innerText)
            im_price.mask(input)
        });


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

    


    btn = document.getElementById('btn-cadastrar')

    btn.addEventListener("click", function(e){
        e.preventDefault()

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
    
    

    let inputOpen = false    
    function edit(id, btn){

        // console.log("btn ",btn.parentNode.parentNode.parentNode.children)

        btn2 = Array.from(btn.parentNode.parentNode.parentNode.children)
        // console.log(btn2)

        for( let item of btn2)
        {
            console.log(item.innerHTML  )
            item 
        }

        if(inputOpen == true)
        {
            //entra aqui na hora de salvar
            console.log("enviar informaçoes")
            console.log(inputOpen)
            
            
            empresa = document.getElementById(`employer${id}`)
            statusServices = document.getElementById(`status${id}`)            
            userInsert = document.getElementById(`user${id}`)
            dateinsert = document.getElementById(`date${id}`)
            category = document.getElementById(`category${id}`)
            titleServices = document.getElementById(`title${id}`)
            price = document.getElementById(`price${id}`)
            dateAlter = document.getElementById(`date-lastchange${id}`)
            userAlter = document.getElementById(`user-lastchange${id}`)


            ///////////////////////////
            let im_priceInput = new Inputmask( 'currency',{"autoUnmask": false,
               radixPoint:",",
                groupSeparator: ".",
                allowMinus: false,
                prefix: ' R$ ',            
                digits: 2,
                digitsOptional: false,
                rightAlign: false,
                unmaskAsNumber: false                                
            });
            im_priceInput.mask(price.children[0])

            // dateAlter.setAttribute("readonly", false) 
            // empresa.children[0].readOnly = true;
            
            empresa.children[0].readOnly = true;
            console.log("salvando ===============> ",empresa.children[0])

                       
                    
        //    console.log( empresa.children[0].value )
        //    console.log(statusServices.children[0].value)
        //    console.log( userInsert.children[0].value )
        //    console.log( dateinsert.children[0].value )
        //    console.log( category.children[0].value )
        //    console.log( titleServices.children[0].value )
        //    console.log( price.children[0].value  )
        //    console.log( dateAlter.children[0].value )
        //    console.log( userAlter.children[0].value )


           let sendData =  {
            "id":               id,
            "empresa" :         empresa.children[0].value.trim(),
           "statusServices":    statusServices.children[0].value.trim(),
           "userInsert":        userInsert.children[0].value.trim(),
            "dateinsert":       dateinsert.children[0].value.trim(),
           "category":          category.children[0].value.trim(),
           "titleServices":     titleServices.children[0].value.trim(),
           "price":             price.children[0].value.trim(),
           "dateAlter":         dateAlter.children[0].value.trim(),
           "userAlter":         userAlter.children[0].value.trim()

           }

           console.log(sendData)


           
            fetch('api/tabela',{ 
            method:'post',        
            body: JSON.stringify(sendData),
            headers:{"Content-type":"application/json"}
            })            
            .then(res=> res.json())
            .then(res => console.log(res))
            .catch((e)=> {console.log("erro => ", e)} )


            
          console.log("IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII")

            
            inputOpen = false
            console.log("saindo do edit ", inputOpen)
        }else{
            console.log("abrir para alterar")
            inputOpen = true
            console.log(inputOpen)
            
        }

        
    }

//**********************************

$(document).on('click','.edit',function(){
    let elementTd = $(this).closest('tr').find('td')

    let btnId = $(this).attr("id")

        let date = 'date'+btnId
        let userLastchange = 'user-lastchange'+btnId
        let price = "price"+btnId

        let user = "user"+btnId
        

    $.each(elementTd,function(){

        let inputId = $(this).attr('id')
        // console.log(inputId, "=>", date , inputId, "=>", userLastchange , inputId, "=>", price )

        if(inputId == date || inputId == userLastchange || user == inputId )
        {
            input = $(this).find('input')
            $(input).attr('readonly',true)
            $(input).css('background','#dddddd87')
            
        }

        // console.log("coluna ",$(this).attr('id')+btnId)

    })
});


// $(document).on('keyup','input',function(){
//     let el = $(this).closest('tr').find('td')
//     console.log($(el).attr('td'))
// })
    function editInput()
    {        
        inputOpen = true   
        console.log("estou aqui editInput ", inputOpen)     
    }


</script>    