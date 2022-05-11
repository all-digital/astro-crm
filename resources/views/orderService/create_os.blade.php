@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Order de Serviço</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    
@endsection

@section('content')

@php
    $cliente = ['','darcio','roberto','julio']
@endphp
        
        {{-- {{dd($cliente)}} --}}

          <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">O . S</h4>
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
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                     
                        <form id="formEquipment" action="{{route('os.store')}}" method="POST">
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="company">Empresa</label>
                                            <input type="text" name="company" class="form-control @error('company') is-invalid @enderror">                                           
                                            
                                        </div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                              <option value="Ativo">Ativo</option>
                                              <option value="Pendente">Pendente</option>
                                            </select>                                          
                                        </div>                                                                       

                                        <div class="mb-3 mb-4">
                                          <label for="vehicles" class="form-label">Veículo</label>                                            
                                          <select name="vehicles" class="form-control @error('vehicles') is-invalid @enderror">                                              
                                            @foreach ($cliente as $item)
                                            <option value="">{{$item}}</option>
                                            @endforeach
                                          </select>     
                                        </div>

                                          <div class="mb-3 mb-4">
                                            <label for="equipment" class="form-label">Equipamento</label>
                                            <input type="text" name="equipment" class="form-control @error('equipment') is-invalid @enderror" value="Mostra Marca / Modelo / IMEI" readonly>   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="simcard" class="form-label">Simcard</label>
                                            <input type="text" name="simcard" class="form-control @error('simcard') is-invalid @enderror" value="Mostra Operadora / ICCID" readonly>   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="services" class="form-label">Serviços</label>
                                            <select name="services" class="form-control @error('services') is-invalid @enderror">                                              
                                              @foreach ($cliente as $item)
                                              <option value="">{{$item}}</option>
                                              @endforeach
                                            </select>    
                                          </div>


                                          <div class="mb-3 mb-4">
                                            <label class="form-label" for="SubType">Sub Tipo</label>
                                            <select name="subType" class="form-control @error('subType') is-invalid @enderror"> 
                                              <option value="">Selecione uma opção</option>                                             
                                              <option value="Falha no Simcard">Falha no Simcard</option>
                                              <option value="Falha no Rastreador">Falha no Rastreador</option>
                                              <option value="Cancelamento">Cancelamento</option>
                                            </select>                                          
                                        </div>       
                                                                                                                    
                                        <div id="rightSide">
                                        </div>
                                                                                                           
                                      
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  
                                                                            
                                        <div class="mb-3 mb-4">
                                          <label for="user_insert" class="form-label">Usuário de Inserção</label>
                                          <input type="text" name="user_insert" class="form-control @error('user_insert') is-invalid @enderror" value="kskh" readonly>  
                                        </div>

                                                                                 
                                          <div class="mb-3 mb-4">
                                            <label for="client" class="form-label">Cliente</label>                                            
                                            <select name="client" class="form-control @error('client') is-invalid @enderror">                                              
                                              @foreach ($cliente as $item)
                                              <option value="">{{$item}}</option>
                                              @endforeach
                                            </select>     
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="addressClient" class="form-label">Endereço do Cliente</label>
                                            <input type="text" name="addressClient" class="form-control @error('addressClient') is-invalid @enderror" value="Pega do CADASTRO da conta">   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="zipCode" class="form-label">Cep do Cliente</label>
                                            <input type="text" name="zipCode" class="form-control @error('zipCode') is-invalid @enderror" value="Pega do CADASTRO da conta">   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="cityClient" class="form-label">Cidade do Cliente</label>
                                            <input type="text" name="cityClient" class="form-control @error('cityClient') is-invalid @enderror" value="Pega do CADASTRO da conta">   
                                          </div>

                                          <div class="mb-3 mb-4">
                                            <label for="countryClient" class="form-label">Estado do Cliente</label>
                                            <input type="text" name="countryClient" class="form-control @error('countryClient') is-invalid @enderror" value="Pega do CADASTRO da conta">   
                                          </div>

                                      
                                        <div id="leftSide">

                                        </div>                                    

                                                                                  
                                                                   
                                    </div>
                                </div>

                            </div> 
                            
                            <div style="text-align: center;" id="typeOS">
                              <select class="btn btn-info waves-effect waves-light px-5 my-2" name="typeOS" >
                                <option value="Tipo de O.S" selected>Tipo de O.S</option>
                                <option value="Venda">Venda</option>
                                <option value="Manutencao">Manutenção</option>
                              </select>
                            </div>

                            <div style="text-align: right;" title="selecione um tipo de O.S">
                              <button class="btn btn-primary waves-effect waves-light px-5 my-2" id='btn-register-os'  disabled>Cadastrar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>

          </div>
          


@endsection

@push('script-js') 
@endpush

       

@push('customized-js')
<script>
    
  /////////////////////////
  let typeOS = document.getElementById('typeOS')
  let btnRegister = document.getElementById('btn-register-os')
  let leftSide = document.getElementById('leftSide')
  let rightSide = document.getElementById('rightSide')
  
  
  typeOS.addEventListener('change', function(){
     
      console.log(typeOS.children[0].value)

      if(typeOS.children[0].value != "Tipo de O.S" ){
        btnRegister.removeAttribute('disabled')

      }else if(typeOS.children[0].value == "Tipo de O.S"){
        btnRegister.disabled = true          
      }


      if(typeOS.children[0].value == 'Venda')
      {
          leftSide.innerHTML = `
                    <div class="mb-3 mb-4" >
    
                        <label class="form-label text-primary" for="adhesionFee">Taxa de Adesão</label>
                        <select name="adhesionFee" id="adhesionFee" class="form-control">
                          
                          @foreach ($cliente as $item)
                          <option value="{{$item}}">{{$item}}</option>
                          @endforeach
                        </select>
    
                      </div>

                      <div class="mb-3 mb-4">
                              <label for="recurrence" class="form-label text-primary">Recorrencia</label>                             
                              <select name="recurrence" id="recurrence" class="form-control @error('recurrence') is-invalid @enderror">
                                
                                  <option value="Mensal">Mensal</option>
                                  <option value="Semestral">Semestral</option>
                                  <option value="Anual">Anual</option>
                              </select> 
                        </div>                   
                          `    
          rightSide.innerHTML =  `<div class="mb-3 mb-4 text-primary" >
                        <label class="form-label " for="MonthlyPayment">Mensalidade </label>
                        <select name="monthlyPayment" id="monthlyPayment" class="form-control @error('monthlyPayment') is-invalid @enderror">  
                                                  
                          @foreach ($cliente as $item)
                          <option value="{{$item}}">{{$item}}</option>
                          @endforeach
                        </select> 
    
                        </div>    
                        `           
      }else{
                
          leftSide.innerHTML = `
                                    <div class="mb-3 mb-4">
                    
                                        <label class="form-label text-primary" for="cost">Custo</label>
                                        <select name="cost" id="cost" class="form-control">
                                                                    
                                          @foreach ($cliente as $item)
                                          <option value="{{$item}}">{{$item}}</option>
                                          @endforeach
                                        </select>
                    
                                      </div>   
                                      <div class="mb-3 mb-4">
                                              <label for="newSimcard" class="form-label text-primary">Novo Simcard</label>
                                              <input type="text" name="newSimcard" id="newSimcard" class="form-control">   
                                      </div>               
                                  `  
                
                          rightSide.innerHTML =  `<div class="mb-3 mb-4 text-primary" id="client-rigth">
                                          <label class="form-label " for="newEquipment">Novo Equipamento</label>
                                          <select name="newEquipment" id="newEquipment" class="form-control">
                                                                      
                                            @foreach ($cliente as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                            @endforeach
                                          </select>     
                                        </div>   
                                     `            
      }//end if else
                
                          
    })



      btnRegister.addEventListener('click',function(e){
       
        if(typeOS.children[0].value == 'Venda')
        {

          let adhesionFee = document.getElementById('adhesionFee')
          let recurrence = document.getElementById('recurrence')
          let monthlyPayment = document.getElementById('monthlyPayment')


          if(!(!!adhesionFee.value.trim()) )
          {
            adhesionFee.setAttribute('class','form-control is-invalid')
            e.preventDefault()
          }

          if(!(!!recurrence.value.trim()) )
          {
            recurrence.setAttribute('class','form-control is-invalid')
            e.preventDefault()
          }

          if(!(!!monthlyPayment.value.trim()))
          {            
            monthlyPayment.setAttribute('class','form-control is-invalid')
            e.preventDefault()
          }    
         
        }else{

            let cost = document.getElementById('cost')
            let newSimcard = document.getElementById('newSimcard')
            let newEquipment = document.getElementById('newEquipment')

            if(!(!!cost.value.trim()) )
            {
              cost.setAttribute('class','form-control is-invalid')
              e.preventDefault()
            }

            if(!(!!newSimcard.value.trim()) )
            {
              newSimcard.setAttribute('class','form-control is-invalid')
              e.preventDefault()
            }

            if(!(!!newEquipment.value.trim()))
            {            
              newEquipment.setAttribute('class','form-control is-invalid')
              e.preventDefault()
            } 
        }

      })//end event btnRegister

    

</script> 
@endpush
