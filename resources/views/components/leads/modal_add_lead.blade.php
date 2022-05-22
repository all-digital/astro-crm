
{{-- modal para criaçao de um card --}}
<div id="modalLead{{$idModal}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title mt-0" id="myModalLabel">{{$title}}
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>

          <div class="modal-body">
              <div class="row">
                <div class="col-12">

                  <form id="formLead" action="{{route('lead.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                      <div class="card-body">
  
                          <div class="mb-3 row" style="justify-content: center;">
                              <label for="example-text-input"
                                  class="col-md-3 col-form-label">Descrição</label>
                              <div class="col-md-9">
                                  <input class="form-control" type="text" value=""
                                      id="description" name="description"  >
                              </div>
                          </div>
  
                           <div class="mb-3 row" style="justify-content: center;">
                              <label for="status" class="col-md-3 col-form-label">Status</label>
                              <div class="col-md-9">
                                  <select class="form-control" name="status" >                                     
                                    <option value="Selecionar">Selecionar</option>
                                    <option value="Avulso">Avulso</option>
                                    <option value="Recorrente">Recorrente</option>
                                  </select>
                              </div>
  
                            </div>
  
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                              <label for="example-email-input"
                                  class="col-md-3 col-form-label">Produto/Serviço</label>
                              <div class="col-md-9">
                                  <input class="form-control" type="text" value=""
                                      id="product_service" name="product_service" >
                              </div>
  
                          </div>
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                            <label for="example-email-input"
                                class="col-md-3 col-form-label">Moeda</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" value=""
                                    id="coin" >
                            </div>
  
                          </div>
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                            <label for="example-email-input"
                                class="col-md-3 col-form-label">Preço</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="add-price"
                                    required>
                            </div>
  
                          </div>
  
                          {{-- <div class="mb-3 row" style="justify-content: center;">
  
                              <label for="example-url-input" class="col-md-3 col-form-label">Data
                                  de Inserção</label>
                              <div class="col-md-9">
                                  <input class="form-control" type="url" value={{date("d/m/Y")}}
                                      id="add-date-created" readonly>
                              </div>
  
                          </div> --}}
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                              <label for="example-email-input"
                                  class="col-md-3 col-form-label">Categoria</label>
                              <div class="col-md-9">
                                  <input class="form-control" type="text" id="add-category"
                                      required >
                              </div>
  
                          </div>
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                              <label for="example-url-input"
                                  class="col-md-3 col-form-label">Pagamento</label>
                              <div class="col-md-9">
                                  <input class="form-control" type="text" id="payment" name="payment" 
                                      >
                              </div>
  
                          </div>
  
                          <div class="mb-3 row" style="justify-content: center;">
  
                            <label for="example-url-input"
                                class="col-md-3 col-form-label">Tipo da Venda</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" id="type_sale" name="type_sale" 
                                    >
                            </div>
  
                          </div>
  
                          <div class="mb-3 row">
                            <label for="imagem"
                            class="col-md-3 col-form-label d-flex flex-column">Imagem<span class="badge rounded-pill bg-light text-dark">obs:  + ou - 60px</span></label> 
                            <div class="col-md-9">
                                <input type="file" id="imagem" name="imagem" class="form-controltitle="imagem de mais ou menos 60px">
                                     {{-- class="form-control @error('create_user_imagem') is-invalid @enderror" title="imagem de mais ou menos 60px">

                                    @error('create_user_imagem')                                           
                                        <div class="invalid-feedback">
                                            {{$message}}                                          
                                        </div>
                                    @enderror --}}
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
                          <div class="d-flex justify-content-around">
                           
                              <button type="button" class="btn btn-outline-danger waves-effect waves-light mr-3"
                              data-bs-dismiss="modal" id="buttonCancel">CANCELAR</button>
                              <button type="submit" id="btn-register" class="btn btn-outline-success waves-effect waves-light mr-3">CADASTRAR</button>                        
                            
                          </div>

  
                      </div>
                     
                  </form>    

                </div>
                  <!-- end col -->
              </div>
          </div>         
      </div>
      <!-- /.modal-content -->
  </div>   
<!-- /.modal-dialog -->
</div>