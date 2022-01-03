<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="section-title-page">
                    <h4 class="card-title"
                        style="margin-top: 10px; font-size: 16px; font-weight: bold;">{{$services}} - {{$teste}}</h4>
                    <div class="new-service-div">

                        <a href="" class="btn btn-outline-success waves-effect waves-light">
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
                       
                        <tbody x-data>
                            <tr data-id="1">

                                <td style="width: 100px">
                                    <center>
                                        <a class="btn btn-outline-secondary btn-sm edit"
                                            title="Editar" wire:click="submitInfo()" >
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </center>
                                </td>
                                <td style="text-align: center;" data-field="employer"><input type="text" placeholder="empresa">
                                </td>
                                <td style="text-align: center;" data-field="status"><input type="text" placeholder="ativo"></td>
                                <td style="text-align: center;" data-field="user">E-mail</td>
                                <td style="text-align: center;" data-field="date">Data</td>
                                <td style="text-align: center;" data-field="category">Categoria</td>
                                <td style="text-align: center;" data-field="title">Título</td>
                                <td style="text-align: center;" data-field="price">Preço</td>
                                <td style="text-align: center;" data-field="date-lastchange">Data
                                </td>
                                <td style="text-align: center;" data-field="user-lastchange">Usuário
                                </td>

                            </tr>



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
