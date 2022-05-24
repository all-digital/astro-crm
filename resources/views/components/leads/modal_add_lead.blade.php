
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

                    <div class="row">
                        <div class="col-lg-6">
                            <div>

                                <div class="mb-3 mb-4">
                                    <label class="form-label" for="name">Nome*</label>
                                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                                     value="">                                             
                                    
                                    @error('name')                                           
                                          <div class="invalid-feedback">
                                           {{$message}}                                          
                                          </div>
                                    @enderror
                                </div>

                                <div class="mb-3 mb-4">
                                    <label class="form-label" for="telephone">Telefone*</label>
                                    <input type="text" name="telephone"  id="telephone" class="form-control  @error('telephone') is-invalid @enderror"
                                      >                                             
                                    
                                    @error('telephone')                                           
                                          <div class="invalid-feedback">
                                           {{$message}}                                          
                                          </div>
                                    @enderror
                                </div>

                                <div class="mb-3 mb-4">
                                  <label class="form-label" for="whatsapp">Whatsapp*</label>
                                  <input type="text" name="whatsapp" class="form-control  @error('whatsapp') is-invalid @enderror">
                                                                             
                                  @error('whatsapp')                                           
                                        <div class="invalid-feedback">
                                         {{$message}}                                          
                                        </div>
                                  @enderror
                              </div>
                                                               

                                <div class="mb-3 mb-4">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">  
                                    
                                    @error('email')                                           
                                      <div class="invalid-feedback">
                                          {{$message}}                                          
                                      </div>
                                    @enderror
                                </div>

                                {{-- <div class="mb-3 mb-4">
                                    <label for="type_sale" class="form-label">Data de criação*</label>
                                    <input type="text" name="date_create" class="form-control @error('date_create') is-invalid @enderror" value="{{ old('date_create') }}">                                     
                                </div>   --}}
                                
                              </div>
                          </div>
                                                                                         

                        <div class="col-lg-6">
                            <div class="mt-4 mt-lg-0">   
                              
                                <div class="mb-3 mb-4">
                                  <label for="responsibility" class="form-label">Responsavel*</label>
                                  <input type="text" name="responsibility" class="form-control" value="{{ auth()->user()->name }}" readonly> 
                                </div>


                                <div class="mb-3 mb-4" >                                                                                     
                                  <label class="form-label" for="source">Origem*</label>                          
                                      <select name="source" class="form-control" >
                                        <option value="Própria">Própria</option>
                                        <option value="Indicação">Indicação </option>  
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagran">Instagran</option> 
                                        <option value="Linkedin">Linkedin</option> 
                                        <option value="Website">Website</option> 
                                        <option value="Evento">Evento</option>
                                        <option value="sem opção" class="text-danger">Nenhuma das opções</option> 
                                        
                                      </select>  
                                      </div>         
                                <div class="mb-3 mb-4" >                                                                                    
                                  <label for="type_lead" class="form-label">Tipo de lead*</label>
                                  <input type="text"  class="form-control" value="{{$title}}" readonly>
                                      {{-- <select name="type_lead" class="form-control" >
                                        <option value="{{$title}}">{{$title}} </option>  
                                        <option value="Allcom">teste</option>
                                        <option value="Suntech">teste</option>                                                                          
                                        <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                      </select>                             --}}
                                </div>                                                        

                                <div class="mb-3 mb-4" >                                                                                    
                                  <label for="region" class="form-label">Região*</label>
                                      <select name="region" class="form-control" > 
                                          <option value="nao identificado"> </option>                                    
                                          <option value="AC">Acre</option>
                                          <option value="AL">Alagoas</option>
                                          <option value="AP">Amapá</option>
                                          <option value="AM">Amazonas</option>
                                          <option value="BA">Bahia</option>
                                          <option value="CE">Ceará</option>
                                          <option value="DF">Distrito Federal</option>
                                          <option value="ES">Espírito Santo</option>
                                          <option value="GO">Goiás</option>
                                          <option value="MA">Maranhão</option>
                                          <option value="MT">Mato Grosso</option>
                                          <option value="MS">Mato Grosso do Sul</option>
                                          <option value="MG">Minas Gerais</option>
                                          <option value="PA">Pará</option>
                                          <option value="PB">Paraíba</option>
                                          <option value="PR">Paraná</option>
                                          <option value="PE">Pernambuco</option>
                                          <option value="PI">Piauí</option>
                                          <option value="RJ">Rio de Janeiro</option>
                                          <option value="RN">Rio Grande do Norte</option>
                                          <option value="RS">Rio Grande do Sul</option>
                                          <option value="RO">Rondônia</option>
                                          <option value="RR">Roraima</option>
                                          <option value="SC">Santa Catarina</option>
                                          <option value="SP">São Paulo</option>
                                          <option value="SE">Sergipe</option>
                                          <option value="TO">Tocantins</option>
                                          <option value="EX">Estrangeiro</option>
                                      </select>                           
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

<script type="text/javascript">

telephone = document.querySelector('#telephone')
  console.log(telephone)


  telephone.addEventListener("click", function(){

    console.log("testando")
  })

    /* Máscaras ER */
    function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
    function id( el ){
      return document.getElementById( el );
    }
    window.onload = function(){
      id('telephone').onkeyup = function(){
        mascara( this, mtel );
      }
    }


</script>


<script>
  telephone = document.querySelector('#telephone')
  console.log(telephone)

  let im_telephone = new Inputmask('(99)99999-9999')                        
  im_telephone.mask(telephone)

</script>
</div>