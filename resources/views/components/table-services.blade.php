<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="section-title-page">
                    <h4 class="card-title"
                        style="margin-top: 10px; font-size: 16px; font-weight: bold;">SERVIÇOS</h4>
                    <div class="new-service-div">

                        <a href="" class="btn btn-outline-success waves-effect waves-light">
                            <i class="mdi mdi-google-spreadsheet"></i>
                        </a>

                        <button type="button" class="btn btn-outline-info waves-effect waves-light"
                            data-bs-toggle="modal" data-bs-target="#myModal">NOVO SERVIÇO</button>

                        <!-- <a href="new-service.html" target="_blank" class="btn btn-outline-info waves-effect waves-light">NOVO SERVIÇO</a> -->
                    </div>
                </div>

                @php
                    $servivos = [ 
                        [
                            "id"=> '1',
                        "Empresa"=> 'empresa S.A 1111',
                        "Status" => 'status ok',
                        "Usuário de Inserção" => "darcio",
                        "Data de Inserção" => "01/01/2022",
                        "Categoria"=> "catgoria top",
                        "Título do Serviço" => "serviço de chip",
                        "Preço" => "200,30",
                        "Data da Última Alteração"=> "03/02/2022",
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
                @endphp


                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <thead>
                            <tr>
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

                            @foreach ($servivos as $service)
                                <tr data-id="1">
                                    
                                    <td style="width: 100px">
                                        <center>
                                            <a class="btn btn-outline-secondary btn-sm edit"
                                                title="Editar"  onclick="edit({{$service['id']}})" >
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </center>
                                    </td>
                                    
                                        <td style="text-align: center;" id="employer{{$service['id']}}" data-employer data-field="employer{{$service['id']}}" ondblclick="editInput()" >{{$service['Empresa']}}
                                        </td>

                                        <td style="text-align: center;" id="status{{$service['id']}}" data-field="status{{$service['id']}}" ondblclick="editInput()" >{{$service['Status']}}</td>

                                        <td style="text-align: center;" id="user{{$service['id']}}" data-field="user{{$service['id']}}" ondblclick="editInput()" >{{$service['Usuário de Inserção']}}</td>

                                        <td style="text-align: center;" id="date{{$service['id']}}" data-field="date{{$service['id']}}" ondblclick="editInput()" >{{$service['Data de Inserção']}}</td>

                                        <td style="text-align: center;" id="category{{$service['id']}}" data-field="category{{$service['id']}}" ondblclick="editInput()" >{{$service['Categoria']}}</td>

                                        <td style="text-align: center;" id="title{{$service['id']}}" data-field="title{{$service['id']}}" ondblclick="editInput()" >{{$service['Título do Serviço']}}</td>

                                        <td style="text-align: center;" id="price{{$service['id']}}" data-field="price{{$service['id']}}" ondblclick="editInput()" >{{$service['Preço']}}</td>

                                        <td style="text-align: center;" id="date-lastchange{{$service['id']}}" data-field="date-lastchange{{$service['id']}}" ondblclick="editInput()" >{{$service['Data da Última Alteração']}}
                                        </td>

                                        <td style="text-align: center;" id="user-lastchange{{$service['id']}}" data-field="user-lastchange{{$service['id']}}" ondblclick="editInput()" >{{$service['Usuário da Última Alteração']}}
                                        </td>
                                   

                                </tr>
                            
                            @endforeach


                        </tbody>

                    </table>

                    <div class="mt-3">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Anterior</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul>
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
                                    <input class="form-control" type="text" value="Empresa"
                                        id="example-text-input" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row" style="justify-content: center;">
                                <label for="example-search-input"
                                    class="col-md-3 col-form-label">Status</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="search" value="Ativo"
                                        id="example-search-input" readonly>
                                </div>
                            </div>

                            <div class="mb-3 row" style="justify-content: center;">

                                <label for="example-email-input"
                                    class="col-md-3 col-form-label">Usuário</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" value="João"
                                        id="example-email-input" required readonly>
                                </div>

                            </div>

                            <div class="mb-3 row" style="justify-content: center;">

                                <label for="example-url-input" class="col-md-3 col-form-label">Data
                                    de Inserção</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="url" value="17/12/2021"
                                        id="example-url-input" readonly>
                                </div>

                            </div>

                            <div class="mb-3 row" style="justify-content: center;">

                                <label for="example-email-input"
                                    class="col-md-3 col-form-label">Categoria</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" id="example-email-input"
                                        required>
                                </div>

                            </div>

                            <div class="mb-3 row" style="justify-content: center;">


                                <label for="example-url-input"
                                    class="col-md-3 col-form-label">Título do Serviço</label>
                                <div class="col-md-7">
                                    <input class="form-control" type="text" id="example-url-input"
                                        required>
                                </div>

                            </div>

                            
                            <div class="mb-3 row" style="justify-content: center;">

                                <label for="example-email-input"
                                    class="col-md-3 col-form-label">Frequência</label>
                                <div class="col-md-7">
                                    <select class="form-control select2" type="text" id="campoPreco"
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
                                    <input class="form-control" type="text" id="campoPreco"
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
                <button type="button" class="btn btn-success waves-effect waves-light">CADASTRAR</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
<script>
    

    let inputOpen = false
    
    function edit(id){

        if(inputOpen == true)
        {

            console.log("enviar informaçoes")
            console.log(inputOpen)
            

            //empresa = document.querySelectorAll(`[data-field=employer${id}]`)

            empresa = document.getElementById(`employer${id}`)
            status = document.getElementById(`status${id}`)
            userInsert = document.getElementById(`user${id}`)
            dateinsert = document.getElementById(`date${id}`)
            category = document.getElementById(`category${id}`)
            titleServices = document.getElementById(`title${id}`)
            price = document.getElementById(`price${id}`)
            dateAlter = document.getElementById(`date-lastchange${id}`)
            userAlter = document.getElementById(`user-lastchange${id}`)

            
           
           console.log( empresa.children[0].value )
        //    console.log( status.children[0].value )
           console.log( userInsert.children[0].value )
           console.log( dateinsert.children[0].value )
           console.log( category.children[0].value )
           console.log( titleServices.children[0].value )
           console.log( price.children[0].value )
           console.log( dateAlter.children[0].value )
           console.log( userAlter.children[0].value )

            
          console.log("IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII")

            
            inputOpen = false
            console.log("saindo do edit ", inputOpen)
        }else{
            console.log("abrir para alterar")
            inputOpen = true

            console.log(inputOpen)
        }

        
    }


    function editInput()
    {        
        inputOpen = true   
        console.log("estou aqui editInput ", inputOpen)     
    }


</script>    