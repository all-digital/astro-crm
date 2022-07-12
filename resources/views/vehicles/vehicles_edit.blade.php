@extends('layouts.app')

@section('nav-header')


 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">VEÍCULOS</h4>
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
                <div class="card" id="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">VEÍCULOS</h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{$error}}</li>
                                @endforeach
                              </ul>
                            </div>                            
                        @endif

                        @if(session('errorValue'))
                          <div class="mt-2 alert alert-danger">
                              {{session('errorValue')}}
                          </div>
                        @endif

                        <form id="formVehicles" action="{{route('veiculo-edit.update',$id)}}" method="POST">
                          @method('PUT')
                          @csrf                    
                           
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div>
                                         
                                            <div class="mb-3 mb-4">
                                              <label for="company" class="form-label">Empresa</label>
                                                
                                              <input class="form-control @error('company') is-invalid @enderror"  type="text" readonly
                                              id="company" name="company" value="{{$vehicle->company}}">
                                            </div>                                                
                                                                                        
  
                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="client">Cliente</label>
                                            <input class="form-control @error('company') is-invalid @enderror"  type="text" readonly
                                            id="client" name="client" value="{{$client->name}}">
                                           {{-- <select name="client" class="form-control select2-client">
                                               <option value=""></option>
                                              <option value="">Sem vínculo</option>
                                              @foreach ($client as $item)
                                                <option value="{{$item['id']}}">{{$item['name']}}</option>                                                
                                              @endforeach                                                                                      
                                            </select>                                           --}}
                                          </div>     

                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="brand">Marca</label>                                              
                                            <input class="form-control @error('brand') is-invalid @enderror"  type="text" readonly
                                            id="brand" name="brand" value="{{$vehicle->brand}}">                                                                                   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="year">Ano</label>
                                            <input class="form-control @error('year') is-invalid @enderror"  type="text" readonly
                                            id="year" name="year" value="{{$vehicle->year}}">              
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="value" class="form-label">Valor</label>
                                            <input type="text" name="value" id="value" class="form-control @error('value') is-invalid @enderror" value="{{ $vehicle->value }}">   
                                            
                                            @if(session('errorValue'))
                                              <div class="mt-2 alert alert-danger">
                                                  {{session('errorValue')}}
                                              </div>
                                            @endif

                                          </div>


                                          <div class="mb-3 mb-4">
                                            <label for="update_responsible_last_updated" class="form-label">Usuário de Inserção</label>
                                            
                                                <input class="form-control"  value="{{  $vehicle->responsible_for_insert }}" type="text" readonly
                                                    id="update_responsible_last_updated" name='responsible_for_insert'>                                               
                                                         
                                          </div> 

                                          <div class="mb-3 mb-4">
                                            <label for="update_responsible_last_updated" class="form-label">Usuário da Última Alteração</label>
                                            
                                                <input class="form-control"  value="{{  $vehicle->responsible_last_updated ?? ''}}" type="text" readonly
                                                    id="update_responsible_last_updated" name='responsible_last_updated'>                                               
                                                         
                                          </div> 
                                                                                                                        
                                        
                                      </div>
                                  </div>


  
                                  <div class="col-lg-6">
                                      <div class="mt-4 mt-lg-0"> 
                                        
                                        
                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control">
                                              @if ($vehicle['status']) <option value="{{$vehicle->status}}">{{ucfirst($vehicle->status)}}</option>  @endif
                                                                                                
                                              <option value="ativo">Ativo</option>
                                              <option value="inativo">Inativo</option>
                                              <option value="manutencao">Manutenção</option>
                                              {{-- <option value="estoque">Estoque</option>
                                              <option value="vinculado">Vinculado</option>
                                              <option value="cancelado">Cancelado</option> --}}
                                            </select>                                          
                                          </div>
                                        
                                         
                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="type_vehicles">Tipo</label>
                                            <input class="form-control @error('type_vehicles') is-invalid @enderror"  type="text" readonly
                                            id="type_vehicles" name="type_vehicles" value="{{$vehicle->type}}">  
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="model">Modelo</label>
                                            <input class="form-control @error('model') is-invalid @enderror"  type="text" readonly
                                            id="model" name="model" value="{{$vehicle->model}}">                             
                                          </div> 

  
                                          <div class="mb-3 mb-4">
                                            <label for="vehicle_plate" class="form-label">Placa</label>

                                            <input class="form-control"  type="text" readonly
                                            id="vehicle_plate" name="vehicle_plate"
                                             value="{{ $vehicle->license_plate }}" placeholder="{{$vehicle->license_plate}}">                                           
                                          </div>                                          
                                                                                                                            
                                         
                                          {{-- @livewire('equipment-search',["equipment"=> $vehicle['responsible_last_updated'] ?: ""]) --}}
                                          {{-- @livewire('equipment-search') --}}

                                          {{-- <div class="mb-3 mb-4">

                                            <label for="equipment"  >Equipamento</label>
                                            <input  name="equipment" id="te" class="form-control"  placeholder="Imei - Modelo - Marca teste">  
                                            {{-- <div id="equipments"> 
                                                      
                                                
                                        
                                            </div>                                              
                                          </div> --}}

                                          <div class="mb-3 mb-4">
                                            <label for="equip"  >Equipamento</label>
                                            <input   id="equip" class="form-control"  placeholder="Imei - Modelo - Marca" 
                                            @if (isset($vehicle->equipmentVehicle->imei ))
                                            value="{{$vehicle->equipmentVehicle->imei}} - {{$vehicle->equipmentVehicle->imei}} - {{$vehicle->equipmentVehicle->model}}" > 
                                            @else
                                            value=""> 
                                            @endif
                                            
                                            <input   name="idEquip" type="hidden" id="idEquip"
                                            @if (isset($vehicle->equipmentVehicle->imei ))
                                                value="{{$vehicle->equipmentVehicle->id}}"
                                            @else
                                                value=""
                                            @endif
                                            > 
                                            <div id="list-equip">

                                            </div>
                                          </div>



                                          <div class="mb-3 mb-4">
                                            <label for="update_responsible_last_updated" class="form-label">Data de Inserção</label>
                                            
                                                <input class="form-control"  value="{{  $vehicle->created_at }}" type="text" readonly
                                                    id="update_responsible_last_updated" name='created_at'>                                             
                                                         
                                          </div> 
             

                                          <div class="mb-3 mb-4">
                                            <label for="update_responsible_last_updated" class="form-label">Data da Última Alteração</label>
                                            
                                                <input class="form-control"  value="{{  $vehicle->updated_at }}" type="text" readonly
                                                    id="update_responsible_last_updated" name='updated_at'>                                               
                                                         
                                          </div> 

                                         
                                      </div>
                                  </div>
                              </div>                                                                                 
  
                              <div style="text-align: right;">
                                <button class="btn btn-info waves-effect waves-light px-5 my-2">Enviar Edição</button>
                              </div>
                              
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>

          </div>


@endsection

@push('script-js')
<script src="{{asset('assets\libs\inputmask\min\jquery.inputmask.bundle.min.js')}}"></script>
@endpush


@push('customized-js')
<script>
  $(document).ready(function() {
    $( '.select-2model').select2();
    $('.select-2year').select2();
    $('.select-2brand').select2();
    $('.select2-client').select2();
    $('.select2-equipment').select2();

  });

  window.onload = function() {

  //// 
  let addMaskValue = document.getElementById('value')

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
  im_addPrice.mask(addMaskValue)



}//end function window.onload




//////////   js ref ao input com pesquisa dinamina (ajax ) equipamentos

      var companyId = {{ Js::from(Auth::user()->company->id) }};
      // console.log("comany->",companyId )

      
      function setInputEquip(e){
          console.log(e.target)
          let target = e.target

          document.getElementById("equip").value = target.innerText 
          document.getElementById('list-equip').style.display = "none"
          document.getElementById('list-equip').innerHTML = ""
          
          document.getElementById("idEquip").value = target.id
      }//




      const equipment = document.getElementById('equip');

      document.addEventListener('keyup', fnKeyup);
      
      function fnKeyup(e) {

        const list = document.getElementById('list-equip');

        console.log(equipment.value)
        text = equipment.value
       
        if(text.trim() == ""){
          list.innerHTML = ""
          return
        }
        
        if(text.length < 2)return

        fetch(`/api/search-equipment/${text}/${companyId}`)
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
                    div.innerText = `${element.imei} - ${element.model} - ${element.brand}`
                    div.setAttribute("id", element.id);
                    div.setAttribute("class", 'option-equip')
                    div.addEventListener('click',setInputEquip)
                  list.append(div)
              equipment

            });


          })
        .catch((error) => console.error('Whoops! Erro:', error.message || error))

        
      }

      //click para limpar
      document.getElementById("equip").addEventListener('dblclick', function(e){
          e.target.value = ""
      })//

      
      //ao clicar fora do input, vai fechar a barra de pesquisa
      document.addEventListener('click', function(e){
               
         if(e.target.className != "option-equip")
         {
            document.getElementById('list-equip').style.display = "none"
            document.getElementById('list-equip').innerHTML = ""            
         }


      })//



</script>
@endpush
