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
                <div class="card">
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


                     
                        <form id="formVehicles" action="{{route('veiculo.store')}}" method="POST">
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                       
                                        {{-- super admin  --}}
                                        @if (in_array('Super Admin',$permission))
                                          <div class="mb-3 mb-4">
                                            <label for="company" class="form-label">Empresa</label>
                                              
                                              
                                                <select id="company" name="company" class="form-select" aria-label="Default select example">
                                                    @foreach ($listCompany->all()->toArray() as $item)

                                                        <option value="{{$item['social_Reason']}}">{{$item['social_Reason']}}</option>
                                                        
                                                    @endforeach                                                        
                                                    
                                                </select>
                                                 
                                              
                                          </div>                                                
                                        @else
                                            <div class="mb-3 mb-4">
                                                <label for="company" class="form-label">Empresa</label>
                                               
                                                    <input class="form-control @error('company') is-invalid @enderror"  type="text" readonly
                                                    id="company" name="company" value="{{auth()->user()->company->social_Reason }}">

                                                    @error('company')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                
                                            </div>                                                 
                                        @endif

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="client">Cliente</label>
                                          <select name="client" id="client" class="form-control select2-client @error('client') is-invalid @enderror" onchange="myFunction()">
                                            <option value=""></option>
                                            {{-- <option value="">Sem vínculo</option> --}}
                                            @foreach ($client as $item)
                                              <option value="{{$item['id']}}">{{$item['name']}}</option>                                                
                                            @endforeach
                                                        
                                            @error('client')                                           
                                              <div class="invalid-feedback">
                                                  {{$message}}                                          
                                              </div>
                                            @enderror

                                          </select>                                          
                                        </div>     

                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                              <option value="ativo">Ativo</option>
                                              <option value="inativo">Inativo</option>
                                              <option value="estoque">Estoque</option>
                                              <option value="vinculado">Vinculado</option>
                                              <option value="manutenção">Manutenção</option>
                                              <option value="cancelado">Cancelado</option>
                                            </select>                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="type_vehicles">Tipo</label>
                                          <select name="type_vehicles" id="type_vehicles" class="form-control @error('type_vehicles') is-invalid @enderror">
                                            <option value="" class="is-invalid"></option>
                                            <option value="Carro">Carro</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Caminhao">Caminhão</option>
                                            <option value="Onibus">Ônibus</option>
                                            <option value="Microonibus">Microônibus</option>
                                            <option value="Bicicleta">Bicicleta</option>
                                            <option value="Pessoa">Pessoa</option>
                                            <option value="Pet">Pet</option>
                                          </select>                 
                                        </div>


                                        <div class="mb-3 mb-4">
                                          <label class="form-label @error('brand') is-invalid @enderror" for="brand">Marca</label>
                                          <select name="brand" id="brand" class="form-control select-2brand @error('brand') is-invalid @enderror" onchange="modelVehicle()">                                            
                                                                                        
                                            {{-- @foreach (cache('marcas') as $marca)
                                              <option style="text-align: center;" value="{{$marca["codigo"]}}">{{$marca["nome"]}}</option>
                                            @endforeach --}}
                                     
                                          </select>                                          
                                        </div>                                                                                                                 

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  

                                        <div class="mb-3 mb-4">

                                          <label class="form-label" for="model">Modelo</label>
                                          <select name="model" id="model" class="form-control select-2model @error('model') is-invalid @enderror" onchange="yearVehicle()" >
                                                                                                                                                                         
                                          </select>                                          


                                         

                                        </div> 
                                      
                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="year">Ano</label>
                                          <select name="year" id ="year" class="form-control select-2year @error('year') is-invalid @enderror" onchange="valueVehicle()">                                                                                       
                                          </select>                                          
                                        </div> 
                                       

                                        <div class=" row mb-3 mb-4">
                                          <label for="vehicle_plate1" class="form-label">Placa</label>

                                          <div class="col-6">
                                            <input type="text" name="vehicle_plate"  id="vehicle_plate" class="form-control @error('vehicle_plate') is-invalid @enderror" value="{{ old('vehicle_plate') }}" placeholder="Placa antiga">
                                          </div>

                                          <div class="col-6">
                                            <input type="text" name="vehicle_plate2"  id="vehicle_plate2" class="form-control @error('vehicle_plate2') is-invalid @enderror" value="{{ old('vehicle_plate2') }}" placeholder="Placa nova">
                                          </div>
                                          @if(session('errorSize'))
                                            <div class="mt-2 alert alert-danger">
                                                {{session('errorSize')}}
                                            </div>
                                          @endif

                                            @error('vehicle_plate')                                           
                                              <div class="invalid-feedback">
                                                {{$message}}                                          
                                              </div>
                                            @enderror

                                            @error('vehicle_plate2')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                            @enderror
                                                                                     
                                        </div>
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Valor</label>
                                          <input type="text" name="value" id="value" class="form-control @error('value') is-invalid @enderror" value="{{ old('value') }}">  
                                          
                                          @if(session('errorValue'))
                                            <div class="mt-2 alert alert-danger">
                                                {{session('errorValue')}}
                                            </div>
                                          @endif
                                          
                                          @error('value')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="equipment" class="form-label">Equipamento</label>                                         
                                          <select name="equipment" class="form-control select2-equipment" >                                                                                                                          
                                            <option value="">Sem vínculo</option>
                                            @foreach ($equipments as $item)
                                              <option value="{{$item['imei']}}">{{$item['imei']}}</option>                                                
                                            @endforeach

                                          </select>  
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                                 

                            <div style="text-align: right;">
                              <button class="btn btn-info waves-effect waves-light px-5 my-2">Cadastrar</button>
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
<script src="{{asset('custom\css\sweetalert2@11.css')}}"></script> 

@endpush


@push('customized-js')
<script>
  $(document).ready(function() {
    $( '.select-2model').select2();
    $('.select-2year').select2(
      // {
      //   placeholder: '.  . This is my placeholder', 
      // }     
    );
    $('.select-2brand').select2();
    $('.select2-client').select2();
    $('.select2-equipment').select2();
  });

  $('b[role="presentation"]').hide();

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

    let addMaskPlate = document.getElementById('vehicle_plate')
    let im_addPlate = new Inputmask( {mask: 'AAA-9999'},{mask: 'AAA9999'});
    im_addPlate.mask(addMaskPlate)


    let addMaskPlate2 = document.getElementById('vehicle_plate2')
    let im_addPlate2 = new Inputmask( {mask: 'AAA9A99'});
    im_addPlate2.mask(addMaskPlate2)

    addMaskPlate.onclick = function(){
      addMaskPlate2.value = ""
    }

    addMaskPlate2.onclick = function(){
      addMaskPlate.value = ""
    }
       
  }//end function window.onload

  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  let typeVehicles = document.getElementById('type_vehicles')

  typeVehicles.addEventListener('change', function(){

      console.log('testando o type', typeVehicles.value)
      
      if(typeVehicles.value == "Carro" || typeVehicles.value == "Moto" || typeVehicles.value == "Caminhao")
      {

        let brand = document.getElementById('brand')
        let model = document.getElementById('model')
        let year = document.getElementById('year')
        let vehiclePlate = document.getElementById('vehicle_plate')
        let vehiclePlate2 = document.getElementById('vehicle_plate2')
                         /////////////////////
        if(brand.hasAttribute("disabled"))brand.disabled = false
        if(model.hasAttribute("disabled"))model.disabled = false
        if(year.hasAttribute("disabled"))year.disabled = false
        if(vehiclePlate.hasAttribute("disabled"))vehiclePlate.disabled = false
        if(vehiclePlate2.hasAttribute("disabled"))vehiclePlate2.disabled = false
                  
        veiculo = typeVehicles.value

        brand.innerHTML = `<option value="" selected>
                              <div class="spinner-border " role="status">
                                <span class="sr-only text-danger" >Carregando...</span>
                              </div>
                           </option>`

        fetch(`api/tabela-fipe/marcas/${veiculo}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

        
               brand.innerHTML = ""
               console.log(brand)

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               brand.append(option1)
              
               res.forEach(function(element){

                  let option = document.createElement("option")
                    option.innerHTML = `. . ${element.nome}`
                    option.setAttribute("value", element.codigo);

                    option.setAttribute("data-codigo", element.codigo);

                  brand.append(option)
               })

               console.log("dataset", brand);
                                   
          })
          .catch(function(error){

              console.log("erro api tabela fipe => ",error)
              
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Api da tabela Fipe não esta funcionando no momento, tente outra vez em alguns minutos',              
              })

          })


      }else if(typeVehicles.value == "Bicicleta" || typeVehicles.value == "Pessoa" ||typeVehicles.value == "Pet")
      {

        let brand = document.getElementById('brand')
        brand.innerHTML =  ""
        brand.disabled = true


        let model = document.getElementById('model').disabled = true
        let year = document.getElementById('year').disabled = true

        let vehiclePlate = document.getElementById('vehicle_plate').disabled = true
        let vehiclePlate2 = document.getElementById('vehicle_plate2').disabled = true
        
              console.log("entrou no sem api", brand)  
      }

  })//end typeVehicles chance


  

  //function inline in brand 
  function modelVehicle()
  {
    let model = document.getElementById('model')
    let brand = document.getElementById('brand')
    let typeVehicles = document.getElementById('type_vehicles')

    console.log(typeVehicles.value, brand.value, model)
    let veiculo = typeVehicles.value
    let codigo = brand.value


     fetch(`api/tabela-fipe/modelos/${veiculo}/${codigo}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

               model.innerHTML = ""
               console.log(res)

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               model.append(option1)
              
               res.modelos.forEach(function(element){

                  let option = document.createElement("option")
                
                  option.innerHTML = `. . ${element.nome}`
                  option.setAttribute("value", element.codigo);
                    
                  model.append(option)
               })


                                   
          })
          .catch((error)=> console.log("erro api tabela fipe => ",error))

  }// end modelVehicle


  //function inline in model
  function yearVehicle()
  {    
    let year = document.getElementById('year')
    let model = document.getElementById('model')
    let brand = document.getElementById('brand')
    let typeVehicles = document.getElementById('type_vehicles')

    console.log(typeVehicles.value, brand.value, model)
    let veiculo = typeVehicles.value
    let codigoBrand = brand.value
    let codigoYear = model.value


     fetch(`api/tabela-fipe/anos/${veiculo}/${codigoBrand}/${codigoYear}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

               year.innerHTML = ""
               console.log(res)

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               year.append(option1)
              
               res.forEach(function(element){

                  let option = document.createElement("option")
                    option.innerHTML = `. . ${element.nome}`
                    option.setAttribute("value", element.codigo);

                    year.append(option)
               })
                                   
          })
    .catch((error)=> console.log("erro api tabela fipe => ",error))


  }//end yearVehicle


    //function inline in year
  function valueVehicle()
  {
    let value = document.getElementById('value')
    let year = document.getElementById('year')
    let model = document.getElementById('model')
    let brand = document.getElementById('brand')
    let typeVehicles = document.getElementById('type_vehicles')

    console.log(typeVehicles.value, brand.value, model)
    let veiculo = typeVehicles.value
    let codigoBrand = brand.value
    let codigoYear = model.value
    let codigoValue = year.value


    fetch(`api/tabela-fipe/valor/${veiculo}/${codigoBrand}/${codigoYear}/${codigoValue}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

               console.log(value)
               value.value = ""
               console.log(res)
               value.value = res.Valor

               console.log(res.Valor)            
                                   
          })
    .catch((error)=> console.log("erro api tabela fipe => ",error))



  }// valueVehicle

 

</script>
@endpush
