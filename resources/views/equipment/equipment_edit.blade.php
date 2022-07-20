@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">EQUIPAMENTOS</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    
@endsection

@section('content')

          @inject('listCompany', 'App\Models\Companies')
          <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">IMEI - {{$equipment->imei}}</h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                     
                        <form id="formEquip" action="{{route('equip.update',$id)}}" method="POST">
                          @method('PUT')
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                     
                                      <div class="mb-3 mb-4">
                                        <label class="form-label" for="company">Empresa</label>
                                        <input type="text" name="company" class="form-control  @error('company') is-invalid @enderror"
                                         value="{{ Auth::user()->company->social_Reason}}" readonly>                                             
                                        
                                        @error('company')                                           
                                              <div class="invalid-feedback">
                                               {{$message}}                                          
                                              </div>
                                        @enderror
                                      </div>       

                                       
                                      <div class="mb-3 mb-4" >                                                                                     
                                        <label class="form-label" for="provider">Fornecedor</label>
                                        <input type="text" name="brand" class="form-control" value="{{$equipment->provider}}" readonly >
                                      </div>

                                      <div class="mb-3 mb-4">
                                        <label for="model" class="form-label">Modelo</label>
                                        <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') ??  $equipment->model }}" readonly>  
                                        
                                        @error('model')                                           
                                          <div class="invalid-feedback">
                                              {{$message}}                                          
                                          </div>
                                        @enderror
                                      </div>

                                      <div class="mb-3 mb-4">
                                        <label class="form-label" for="client">Cliente</label>
                                        {{-- <input type="text" name="client" class="form-control " value="{{ $equipment->vehicleEquipment->client->name  ?? ''}} {{ $equipment->vehicleEquipment->client->last_name ?? ''}}" readonly>  --}}

                                          <input type="text" name="client" id="client" class="form-control" value="" readonly>


                                        {{-- <select id="client" name="client" class="form-select select-2-client " aria-label="Default select example">
                                          <option value="" selected ></option>
                                          <option value=""  >Nome - Cpf / CNPJ </option>
                                            @foreach ($clients as $item)
  
                                                <option value="{{$item['id']}}">{{ $item['name'] }} - {{ $item['cnpj_cpf'] }}</option>
                                                
                                            @endforeach                                                        
                                        </select> --}}
                                        
                                    </div>   

                                      <div class="mb-3 mb-4">
                                        <label class="form-label" for="vehicle">Veiculo</label>
                                        {{-- <input type="text" name="vehicle" class="form-control"   value="{{ $equipment->vehicleEquipment->license_plate ?? '' }}" readonly> --}}
                                        <select id="vehicle" name="vehicle" class="form-select select-2-vehicle " aria-label="Default select example" >
                                          <option value="" selected >Placa  - Modelo</option>
                                          <option value=""  ></option>
                                            @foreach ($vehicles as $item)
  
                                                <option value="{{$item->id}}">{{ $item->license_plate }} - {{ $item->model }}</option>
                                                
                                            @endforeach                                                        
                                        </select>
                                                                                                                        
                                      </div>

                                     
                                       <div class="mb-3 mb-4">
                                          <label for="user_insert" class="form-label">Usuário de Inserção</label>
                                          <input type="text" name="user_insert" class="form-control" readonly value="{{$equipment->responsible_for_insert}}">                                          
                                        </div> 
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="date_insert" class="form-label">Data de Inserção</label>
                                          <input type="text" name="date_insert" class="form-control" readonly value="{{$equipment->created_at}}">                                          
                                        </div>  
                                           
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">   


                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="status">Status</label>
                                          <select name="status" class="form-control" onclick="alert('teste')">
                                            <option value="{{$equipment->status}}" selected>{{$equipment->status}}</option>
                                            <option value="estoque">Estoque</option>
                                            <option value="vinculado">Vinculado</option>
                                            <option value="manutenção">Manutenção</option>
                                            <option value="cancelado">Cancelado</option>
                                          </select>                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label for="brand" class="form-label">Marca</label>
                                          <input type="text" name="brand" class="form-control" value="{{$equipment->brand}}" readonly >

                                          {{-- <div id="brand">
                                            <select name="brand" class="form-control" >
                                              <option value="{{$equipment['brand']}}" selected>{{$equipment['brand']}}</option>
                                              <option value="Allcom">Allcom</option>
                                              <option value="Global Position">Global Position</option>
                                              <option value="PST">PST</option>
                                              <option value="Suntech">Suntech</option>
                                              <option value="Queclink">Queclink</option>
                                              <option value="X3TECH">X3TECH</option>
                                              <option value="CalAmp">CalAmp</option>
                                              <option value="MXT">MXT</option>
                                              <option value="Teltonika">Teltonika</option>
                                              <option value="Continental">Continental</option>
                                              <option value="Multiportal">Multiportal</option>
                                              <option value="Multilaser">Multilaser</option>
                                              <option value="Newtec">Newtec</option>
                                              <option value="Coban">Coban</option>
                                              <option value="TK">TK</option>
                                              <option value="Real Tracker">Real Tracker</option>
                                              <option value="BWS">BWS</option>                                           
                                              <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                            </select>              
                                          </div> --}}

                                        </div>
                                      

                                        <div class="mb-3 mb-4">
                                          <label for="year" class="form-label">IMEI</label>
                                          <input type="text" name="imei" class="form-control @error('imei') is-invalid @enderror" value="{{ old('imei') ??$equipment->imei }}" readonly>       

                                          @error('imei')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Simcards</label>                                           
                                          
                                          <input   id="simcard" class="form-control"  placeholder="Numero da linha - Marca - ICCID"
                                         
                                          @if (isset($equipment->simcardEquipment->number_of_line ))
                                          value="{{$equipment->simcardEquipment->number_of_line}} - {{$equipment->simcardEquipment->brand}} - {{$equipment->simcardEquipment->iccid}}" > 
                                          @else
                                          value=""> 
                                          @endif
                                          
                                          <input   name="idSimcard" type="hidden" id="idSimcard"
                                          @if (isset($equipment->simcardEquipment->number_of_line ))
                                              value="{{$equipment->simcardEquipment->id}}"
                                          @else
                                              value=""
                                          @endif
                                          > 

                                          <div id="list-simcard">
                                          </div>
                                        
                                        </div> 



                                        <div class="mb-3 mb-4">
                                          <label for="user_last_edit" class="form-label">Usuário da Última edição</label>
                                          <input type="text" name="user_last_edit" class="form-control" readonly value="{{$equipment->responsible_last_updated ?? ''}}">                                          
                                        </div> 
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="date_last_edit" class="form-label">Data da Última edição</label>
                                          <input type="text" name="date_last_edit" class="form-control" readonly value="{{ $equipment->updated_at }}">                                          
                                        </div>  
                                                                
                                    </div>
                                </div>
                            </div>                                                                                 

                            <div style="text-align: right;">
                              <button class="btn btn-info waves-effect waves-light px-5 my-2">Editar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>

          </div>
          


@endsection

@push('script-js')
  <script>

    $(document).ready(function() {
        $( '.select-2-client').select2();
        $('.select-2-simcards').select2();
        $('.select-2-vehicle').select2();
        
        $('.select-2-vehicle').on("change", function (e) {
          //  console.log("change", e.target.value);

           getClient(e)
          
          });
       

    });


    

  </script>        
@endpush



@push('customized-js')
   
<script>

   //////////   js ref ao input com pesquisa dinamina (ajax ) equipamentos

   var companyId = {{ Js::from(Auth::user()->company->id) }};
      
      
      function setInputEquip(e){
          console.log(e.target)
          let target = e.target

          document.getElementById("simcard").value = target.innerText 
          document.getElementById('list-simcard').style.display = "none"
          document.getElementById('list-simcard').innerHTML = ""
          
          document.getElementById("idSimcard").value = target.id
      }//




      const simcard = document.getElementById('simcard');

      simcard.addEventListener('keyup', fnKeyup);
      
      function fnKeyup(e) {

        const list = document.getElementById('list-simcard');

        console.log(simcard.value)
        text = simcard.value
       
        if(text.trim() == ""){
          list.innerHTML = ""
          return
        }
        
        if(text.length < 2)return

        fetch(`/api/search-simcard/${text}/${companyId}`)
          .then((response) => response.json())
          .then((res) => {
            console.log(res)

            

            list.innerHTML = ""

            if(text.trim() == ""){
              list.innerHTML = ""
              list.style.display = "none";
              return
           }

           if(res.length > 0 )
           {
             list.style.display = "block"
           }else{
              
              list.innerText = "Nenhum resultado encontrado"
           }
           
            res.forEach(element => {

              let div = document.createElement("div")
                    div.innerText = `${element.number_of_line} - ${element.brand} - ${element.iccid}`
                    div.setAttribute("id", element.id);
                    div.setAttribute("class", 'option-simcard')
                    div.addEventListener('click',setInputEquip)
                  list.append(div)
              simcard

            });


          })
        .catch((error) => console.error('Whoops! Erro:', error.message || error))

        
      }

      //click para limpar
      document.getElementById("simcard").addEventListener('dblclick', function(e){
          e.target.value = ""
      })//

      
      //ao clicar fora do input, vai fechar a barra de pesquisa
      document.addEventListener('click', function(e){
               
         if(e.target.className != "option-simcard")
         {
            document.getElementById('list-simcard').style.display = "none"
            document.getElementById('list-simcard').innerHTML = ""            
         }


      })//



      //esta dentro do select2 vehicles
      function getClient(e){

        console.log(e.target.value)

        let id = e.target.value

        fetch(`/api/search-clientVehicle/${id}/${companyId}`)
          .then((response) => response.json())
          .then((res) => {

            console.log(res)

            document.getElementById('client').value = `${res.name}  ${res.last_name}`
            
          
         
          })
        .catch((error) => console.error('Whoops! Erro:', error.message || error))


      }


      
</script>
@endpush
