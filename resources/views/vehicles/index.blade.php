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

                        @if(session('errorSize'))
                          <div class="mt-2 alert alert-danger">
                              {{session('errorSize')}}
                          </div>
                        @endif

                        @if(session('errorValue'))
                          <div class="mt-2 alert alert-danger">
                              {{session('errorValue')}}
                          </div>
                        @endif

                     
                        <form id="formVehicles" action="{{route('veiculo.store')}}" method="POST">
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>

                                      {{-- <input type="hidden" name="companyId" id="CompanyId" value="{{Auth::user()->company->id}}"
                                      required>  --}}
                                       
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
                                          <select name="client" id="client" class="form-control select2-client @error('client') is-invalid @enderror" >
                                                                                   
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
                                          <div id="div-brand">
                                            
                                            <label class="form-label @error('brand') is-invalid @enderror" for="brand">Marca</label> 
                                            <select name="brand" id="brand" class="form-control select-2brand @error('brand') is-invalid @enderror" onchange="modelVehicle()" >   
                                              @if (old('brand'))
                                              <option value="{{old('brand')}}">{{old('brand')}}</option>
                                              @endif    
                                            </select>                                         
                                          
                                          </div>
                                        </div>      
                                  
                                        
                                        <div class="mb-3 mb-4">
                                          <div id="div-year">
                                            <label class="form-label" for="year">Ano</label>
                                            <select name="year" id ="year" class="form-control select-2year @error('year') is-invalid @enderror" onchange="valueVehicle()
                                            ">                                                                                       
                                             @if (old('year'))
                                              <option value="{{old('year')}}">{{old('year')}}</option>
                                             @endif 
                                            </select>                                         
                                          </div>


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



                                    </div>
                                </div>


                                {{-- segunda coluna  --}}
                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  

                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                              @if (old('status') == "ativo") <option value="ativo" selected >Ativo</option>  @endif
                                              @if(old('status') == "inativo" ) <option value="inativo" selected>Inativo</option>  @endif
                                              @if(old('status') == "manutencao" ) <option value="manutencao" selected>Manutenção</option>  @endif
                                              
                                              <option value="ativo" >Ativo</option> 
                                              <option value="inativo">Inativo</option>
                                              <option value="manutencao">Manutenção</option>
                                            </select>                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="type_vehicles">Tipo</label>
                                          <select name="type_vehicles" id="type_vehicles" class="form-control @error('type_vehicles') is-invalid @enderror">

                                            
                                            @if (old('type_vehicles') == "Carro")<option value="Carro" data-type="Carro" selected>Carro</option> @endif  
                                            @if (old('type_vehicles') == "Moto")<option value="Moto" data-type="Moto" selected>Moto</option> @endif 
                                            @if (old('type_vehicles') == "Caminhao")<option value="Caminhao" data-type="Caminhao" selected>Caminhão</option> @endif 
                                            @if (old('type_vehicles') == "Onibus")<option value="Onibus" data-type="Onibus" selected>Ônibus</option> @endif    
                                            @if (old('type_vehicles') == "Microonibus")<option value="Microonibus" data-type="Microonibus" selected>Microônibus</option> @endif 
                                            @if (old('type_vehicles') == "Bicicleta")<option value="Bicicleta" data-type="Bicicleta" selected>Bicicleta</option> @endif 
                                            @if (old('type_vehicles') == "Pessoa")<option value="Pessoa" data-type="Pessoa" selected>Pessoa</option> @endif 
                                            @if (old('type_vehicles') == "Pet")<option value="Pet" data-type="Pet" selected>Pet</option> @endif 
                                              
                                            
                                            <option value="" class="is-invalid"></option>
                                            <option value="Carro" data-type="Carro" >Carro</option>
                                            <option value="Moto" data-type="Moto" >Moto</option>
                                            <option value="Caminhao" data-type="Caminhao">Caminhão</option>
                                            <option value="Onibus" data-type="Onibus">Ônibus</option>
                                            <option value="Microonibus" data-type="Microonibus">Microônibus</option>
                                            <option value="Bicicleta" data-type="Bicicleta">Bicicleta</option>
                                            <option value="Pessoa" data-type="Pessoa">Pessoa</option>
                                            <option value="Pet" data-type="Pet">Pet</option>
                                          </select>                 
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <div id="div-model">
                                            <label class="form-label" for="model">Modelo</label>
                                              <select name="model" id="model" class="form-control select-2model @error('model') is-invalid @enderror" onchange="yearVehicle()" >
                                                @if (old('model'))
                                                <option value="{{old('model')}}">{{old('model')}}</option>
                                                @endif 
                                            </select>                                        
                                          </div>
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
                                          <label for="equip"  >Equipamento</label>
                                          <input   id="equip" class="form-control"  placeholder="Imei - Modelo - Marca" > 
                                          <input   name="idEquip" type="hidden" id="idEquip" > 
                                          <div id="list-equip">

                                          </div>
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
    $( '.select-2model').select2({
      // placeholder: '    modelo',
    });
    $('.select-2year').select2();  
    
    $('.select-2brand').select2({
        placeholder: '    Selecione um TIPO', 
      });

    $('.select2-client').select2();
    $('.select2-equipment').select2();
  });

  
  function initSelect2()
    {
        
        $('.select-2brand').select2({
          placeholder: '    Selecione um TIPO', 
        });

        $( '.select-2model').select2();
        $('.select-2year').select2();
    }

        


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

      // console.log('testando o type', typeVehicles.value)
      //console.log(typeVehicles.value)
      
      if(typeVehicles.value == "Carro" || typeVehicles.value == "Moto" || typeVehicles.value == "Caminhao")
      {
        let brand = document.getElementById('brand')
        let model = document.getElementById('model')
        let year = document.getElementById('year')
        let vehiclePlate = document.getElementById('vehicle_plate')
        let vehiclePlate2 = document.getElementById('vehicle_plate2')

        
        let divModel = document.getElementById('div-model')
        let divYear = document.getElementById('div-year')
        let divBrand = document.getElementById('div-brand')
        
        if(model.dataset.input == "true")
        {
          

          divModel.innerHTML = `<div>
                                        <label class="form-label" for="model">Modelo</label>
                                              <select name="model" id="model" class="form-control select-2model" onchange="yearVehicle()" >
                                            </select> </div>                                       
                                        `

          divBrand.innerHTML = `<div> <label class="form-label @error('brand') is-invalid @enderror" for="brand">Marca</label> 
                                            <select name="brand" id="brand" class="form-control select-2brand @error('brand') is-invalid @enderror" onchange="modelVehicle()" >       
                                            </select>  </div>`                                  

          divYear.innerHTML = `<div> <label class="form-label" for="year">Ano</label>
                                            <select name="year" id ="year" class="form-control select-2year @error('year') is-invalid @enderror" onchange="valueVehicle()">                                                                                       
                                            </select> </div>`

          initSelect2()
          
          console.log("entrou aqui")
          // if(typeVehicles.value == "Carro") 
          // if(typeVehicles.value == "Moto")
          // if(typeVehicles.value == "Caminhao")
          
        }//end model.dataset.input
        
        console.log(divModel,divBrand,divYear)

                         /////////////////////
        if(brand.hasAttribute("disabled"))brand.disabled = false
        if(model.hasAttribute("disabled"))model.disabled = false
        if(year.hasAttribute("disabled"))year.disabled = false
        if(vehiclePlate.hasAttribute("disabled"))vehiclePlate.disabled = false
        if(vehiclePlate2.hasAttribute("disabled"))vehiclePlate2.disabled = false
                  

        veiculo = typeVehicles.value
        
        
        // brand.innerHTML = `<option value="" selected>
        //   <div class="spinner-border " role="status">
        //     <span class="sr-only text-danger" >Carregando...</span>
        //     </div>
        //     </option>`

        // var box = document.getElementById('aioConceptName');
            typeTest = typeVehicles.options[typeVehicles.selectedIndex]
            
            console.log(veiculo)
            console.log("valor select -> ",typeTest.dataset.type, typeTest.text)

        if(brand.dataset.input == "true")
        {
          // let divBrand = document.getElementById('div-brand')

          // divBrand.innerHTML = `<div> <label class="form-label @error('brand') is-invalid @enderror" for="brand">Marca</label> 
          //                                   <select name="brand" id="brand" class="form-control select-2brand @error('brand') is-invalid @enderror" onchange="modelVehicle()" >       
          //                                   </select>  </div>`

                                            console.log("dataset.input ==     true entrou " )    
        }

        console.log("vendo brand ", brand, model)

        fetch(`api/tabela-fipe/marcas/${veiculo}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

        
               brand.innerHTML = ""
              
               

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               brand.append(option1)
              
               res.forEach(function(element){

                  let option = document.createElement("option")
                    option.innerHTML = `${element.nome}`
                    option.setAttribute("value", element.nome);

                    option.setAttribute("data-codigo", element.codigo);

                  brand.append(option)

                  console.log("entrou ajax")
               })

              //  console.log("dataset", brand);
                                   
          })
          .catch(function(error){

              console.log("erro api tabela fipe => ",error)
              
              Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Api da tabela Fipe não esta funcionando no momento, tente outra vez em alguns minutos',              
              })

          })


      }
      else if(typeVehicles.value == "Bicicleta" || typeVehicles.value == "Pessoa" ||typeVehicles.value == "Pet")
      {

        let brand = document.getElementById('brand')
        brand.innerHTML =  ""
        brand.disabled = true


        let divModel = document.getElementById('div-model')
        let divYear = document.getElementById('div-year')

        let year = document.getElementById('year').disabled = true

        let vehiclePlate = document.getElementById('vehicle_plate').disabled = true
        let vehiclePlate2 = document.getElementById('vehicle_plate2').disabled = true
               
        divModel.innerHTML = `<div >
        <label>Modelo ou Obeservaçao</label>
        <input class="form-control" type="text" name="model"  data-input="true" id="model"> </div>`
              
        divYear.innerHTML = `<div >
        <label>Ano</label>
        <input class="form-control" type="type" name="year" id="year"  data-input="true" text="Campo numérico"> </div>`        

      }// end else Bicicleta / Pessoa / Pet

      else if(typeVehicles.value == "Onibus" || typeVehicles.value == "Microonibus" )
      {

        let divModel = document.getElementById('div-model')
        let divYear = document.getElementById('div-year')
        let divBrand = document.getElementById('div-brand')

        let vehiclePlate = document.getElementById('vehicle_plate').disabled = false
        let vehiclePlate2 = document.getElementById('vehicle_plate2').disabled = false


        divModel.innerHTML = `<div >
        <label>Modelo</label>
        <input class="form-control" type="text" data-input="true" name="model" id="model"> </div>`
              
        divYear.innerHTML = `<div >
        <label>Ano</label>
        <input class="form-control" type="type" data-input="true" name="year" id="year"> </div>`

        divBrand.innerHTML = `<div >
        <label>Marca</label>
        <input class="form-control" type="type" data-input="true" name="brand" id="brand"> </div>`

      }


  })//end typeVehicles chance


  

  //function inline in brand 
  function modelVehicle()
  {
    let model = document.getElementById('model')
    let brand = document.getElementById('brand')
    let typeVehicles = document.getElementById('type_vehicles')
    
    let veiculo = typeVehicles.value

    let codigo = brand.options[brand.selectedIndex]
    codigo =  codigo.dataset.codigo       
            console.log("valor select -> ",codigo)
            

    

    model.innerHTML = `<option value="" selected>
                              <div class="spinner-border " role="status">
                                <span class="sr-only text-danger" >Carregando...</span>
                              </div>
                           </option>`


     fetch(`api/tabela-fipe/modelos/${veiculo}/${codigo}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

               model.innerHTML = ""
              //  console.log(res)

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               model.append(option1)
              
               res.modelos.forEach(function(element){

                  let option = document.createElement("option")
                
                  option.innerHTML = `${element.nome}`
                  option.setAttribute("value", element.nome);

                  option.setAttribute("data-codigo", element.codigo);
                    
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

    // console.log(typeVehicles.value, brand.value, model)
    let veiculo = typeVehicles.value
    //let codigoBrand = brand.value
    //let codigoYear = model.value


    let codigoBrand = brand.options[brand.selectedIndex]
    codigoBrand =  codigoBrand.dataset.codigo       
            console.log("valor select -> ",codigoBrand)

    let codigoYear = model.options[model.selectedIndex]
    codigoYear =  codigoYear.dataset.codigo       
    console.log("valor select -> ",codigoYear)        


     year.innerHTML = `<option value="" selected>
                              <div class="spinner-border " role="status">
                                <span class="sr-only text-danger" >Carregando...</span>
                              </div>
                           </option>`


     fetch(`api/tabela-fipe/anos/${veiculo}/${codigoBrand}/${codigoYear}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {

               year.innerHTML = ""
              //  console.log(res)

               let option1 = document.createElement("option")
               option1.setAttribute("selected", true);
               year.append(option1)
              
               res.forEach(function(element){

                  let option = document.createElement("option")
                    option.innerHTML = `${element.nome}`
                    option.setAttribute("value", element.nome);

                    option.setAttribute("data-codigo", element.codigo);

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

    // console.log(typeVehicles.value, brand.value, model)
     let veiculo = typeVehicles.value
    // let codigoYear = model.value
    // let codigoBrand = brand.value
    // let codigoValue = year.value

    let codigoYear = model.options[model.selectedIndex]
    codigoYear =  codigoYear.dataset.codigo       
    console.log("valor select -> ",codigoYear)  

    let codigoBrand = brand.options[brand.selectedIndex]
    codigoBrand =  codigoBrand.dataset.codigo       
            console.log("valor select -> ",codigoBrand)

    let codigoValue = year.options[year.selectedIndex]
    codigoValue =  codigoValue.dataset.codigo       
    console.log("valor select -> ",codigoValue)        


    fetch(`api/tabela-fipe/valor/${veiculo}/${codigoBrand}/${codigoYear}/${codigoValue}`,{ 
          method:'get',                                                     
          headers:{"Content-type":"application/json"}    
          }) 
          .then(res=> res.json())
          .then(res => {
               
               value.value = ""
               console.log(res)
               value.value = res.Valor
                         
                                   
          })
    .catch((error)=> console.log("erro api tabela fipe => ",error))



  }// valueVehicle



  //////////   js ref ao input com pesquisa dinamina (ajax ) equipamentos

  var companyId = {{ Js::from(Auth::user()->company->id) }};


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

        
      }//end fnKeyup


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
