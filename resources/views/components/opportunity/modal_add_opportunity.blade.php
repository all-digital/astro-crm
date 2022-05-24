
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

                    <div class="modal-header">

                        <div class="mb-3 mb-4" >                                                                                     
                            <label class="form-label" for="status">Status</label>                          
                                <select name="status" class="form-control" >
                                    <option value="PST"> </option>  
                                  <option value="Allcom">teste</option>
                                  <option value="Suntech">teste</option>                                                                          
                                  <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                </select>                            
                        </div>

                        <div class="mb-3 mb-4" >                                                                                     
                            <label class="form-label" for="source">Fonte</label>                          
                                <select name="source" class="form-control" >
                                  <option value="PST"></option>                                           
                                  <option value="facebook">Facebook</option>
                                  <option value="instagran">Instagran</option>
                                  <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                </select>                            
                        </div>

                        <div class="mb-3 mb-4" >                                                                                     
                            <label class="form-label" for="assigned">Assinatura</label>                          
                                <select name="assigned" class="form-control" >
                                  <option value="Allcom">Admin</option>
                                  <option value="Suntech">user teste</option>                                                                         
                                  <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                </select>                            
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div>

                                <div class="mb-3 mb-4">
                                    <label class="form-label" for="title">title</label>
                                    <input type="text" name="title" class="form-control  @error('company') is-invalid @enderror"
                                     value="">                                             
                                    
                                    @error('company')                                           
                                          <div class="invalid-feedback">
                                           {{$message}}                                          
                                          </div>
                                    @enderror
                                </div>


                                <div class="mb-3 mb-4">
                                    <label class="form-label" for="client">cliente</label>
                                    <input type="text" name="client" class="form-control  @error('company') is-invalid @enderror"
                                      >                                             
                                    
                                    @error('company')                                           
                                          <div class="invalid-feedback">
                                           {{$message}}                                          
                                          </div>
                                    @enderror
                                </div>
                                                               

                                <div class="mb-3 mb-4">
                                    <label for="product_service" class="form-label">Produto / Serviços</label>
                                    <input type="text" name="product_service" class="form-control @error('product_service') is-invalid @enderror" value="{{ old('product_service') }}">  
                                    
                                    @error('coin')                                           
                                      <div class="invalid-feedback">
                                          {{$message}}                                          
                                      </div>
                                    @enderror
                                </div>

                                <div class="mb-3 mb-4">
                                    <label for="type_sale" class="form-label">Tipo de venda</label>
                                    <input type="text" name="type_sale" class="form-control @error('type_sale') is-invalid @enderror" value="{{ old('type_sale') }}">                                     
                                    @error('type_sale')                                           
                                      <div class="invalid-feedback">
                                        {{$message}}                                          
                                      </div>
                                    @enderror
                                </div>  


                                <div class="mb-3 mb-4">
                                    <label class="form-label" for="description">Descrição</label>                                    
                                     <textarea rows="2" name="description" class="form-control"></textarea>
                                    @error('description')                                           
                                          <div class="invalid-feedback">
                                           {{$message}}                                          
                                          </div>
                                    @enderror
                                </div>
  
                                                               
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">   
                              
                                <div class="mb-3 mb-4">
                                  <label for="coin" class="form-label">Moeda</label>
                                  <input type="text" name="coin" class="form-control @error('coin') is-invalid @enderror" value="{{ old('coin') }}">  
                                  
                                  @error('coin')                                           
                                    <div class="invalid-feedback">
                                        {{$message}}                                          
                                    </div>
                                  @enderror
                                </div>

                                <div class="mb-3 mb-4">
                                  <label for="price" class="form-label">Preço</label>
                                  <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">       

                                  @error('price')                                           
                                    <div class="invalid-feedback">
                                      {{$message}}                                          
                                    </div>
                                  @enderror
                                  
                                </div>

                                <div class="mb-3 mb-4">
                                  <label for="category" class="form-label">Categoria</label>
                                  <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}">                                     
                                  @error('category')                                           
                                    <div class="invalid-feedback">
                                      {{$message}}                                          
                                    </div>
                                  @enderror
                                </div> 
                                
                                <div class="mb-3 mb-4">
                                    <label for="payment" class="form-label">Forma de pagamento</label>
                                    <input type="text" name="payment" class="form-control @error('payment') is-invalid @enderror" value="{{ old('payment') }}">                                     
                                    @error('payment')                                           
                                      <div class="invalid-feedback">
                                        {{$message}}                                          
                                      </div>
                                    @enderror
                                </div>                              
                               
                                                                
                                <div class="mb-3 row">
                                    <label for="imagem"
                                    class="col-md-3 col-form-label d-flex flex-column">Imagem
                                    {{-- <span class="badge rounded-pill bg-light text-dark">obs:  + ou - 60px</span> --}}
                                </label> 
                                    <div class="col-md-9">
                                        <input type="file" id="imagem" name="imagem" class="form-control" title="imagem de mais ou menos 60px">
                                             {{-- class="form-control @error('create_user_imagem') is-invalid @enderror" title="imagem de mais ou menos 60px">
        
                                            @error('create_user_imagem')                                           
                                                <div class="invalid-feedback">
                                                    {{$message}}                                          
                                                </div>
                                            @enderror --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>  
                    
                    <div class="d-flex justify-content-around">
                           
                        <button type="button" class="btn btn-outline-danger waves-effect waves-light mr-3"
                        data-bs-dismiss="modal" id="buttonCancel">CANCELAR</button>
                        <button type="submit" id="btn-register" class="btn btn-outline-success waves-effect waves-light mr-3">CADASTRAR</button>                        
                      
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