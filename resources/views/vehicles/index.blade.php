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
                                          <select name="client" class="form-control select2-client @error('client') is-invalid @enderror">
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
                                          <select name="type_vehicles" class="form-control @error('type_vehicles') is-invalid @enderror">
                                            <option value="" class="is-invalid"></option>
                                            <option value="Carro">Carro</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Caminhão">Caminhão</option>
                                            <option value="Onibus">Ônibus</option>
                                            <option value="Microonibus">Microônibus</option>
                                            <option value="Bicicleta">Bicicleta</option>
                                            <option value="Pessoa">Pessoa</option>
                                            <option value="Pet">Pet</option>
                                          </select>                 
                                        </div>


                                        <div class="mb-3 mb-4">
                                          <label class="form-label @error('brand') is-invalid @enderror" for="brand">Marca</label>
                                          <select name="brand" class="form-control select-2brand @error('brand') is-invalid @enderror">
                                            <option value=""></option>
                                            <option value="CHEVROLET">CHEVROLET</option>
                                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                            <option value="FIAT">FIAT</option>
                                            <option value="CITROEN">CITROEN</option>
                                            <option value="HONDA">HONDA</option>
                                          </select>                                          
                                        </div>                                                                                                                 

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="model">Modelo</label>
                                          <select name="model" class="form-control select-2model @error('model') is-invalid @enderror">
                                            <option value=""> </option>
                                            <option value="CHEVROLET">CHEVROLET</option>CHEVROLET                                          
                                            <option value="VOLKSWAGEN">VOLKSWAGENca</option>
                                            <option value="FIAT">FIAT</option>
                                            <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                            <option value="CITROEN">CITROEN</option>
                                            <option value="CHANA">CHANA</option>
                                            <option value="HONDA">HONDA</option>
                                            <option value="SUBARU">SUBARU</option>
                                            <option value="FERRARI">FERRARI</option>
                                            <option value="BUGATTI">BUGATTI</option>
                                            <option value="LAMBORGHINI">LAMBORGHINI</option>                                      
                                            <option value="FORD">FORD</option>
                                            <option value="HYUNDAI">HYUNDAI</option>
                                            <option value="PEUGEOT">PEUGEOT</option>
                                            <option value="JAC">JAC</option>
                                            <option value="KIA">KIA</option>
                                            <option value="GURGEL">GURGEL</option>
                                            <option value="DODGE">DODGE</option>
                                            <option value="CHRYSLER">CHRYSLER</option>
                                            <option value="BENTLEY">BENTLEY</option>
                                         </select>                                          
                                        </div> 
                                      
                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="year">Ano</label>
                                          <select name="year" class="form-control select-2year @error('year') is-invalid @enderror">
                                            <option value=""> </option>
                                            <option value="1975">1975</option>
                                            <option value="1976">1976</option>
                                            <option value="1977">1977</option>
                                            <option value="1989">1976</option>
                                            <option value="1979">1979</option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>  
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1976</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option> 
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>  
                                            <option value="1999">1999</option>                                         
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option> 
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>                                                
                                          </select>                                          
                                        </div> 
                                       

                                        <div class=" row mb-3 mb-4">
                                          <label for="vehicle_plate1" class="form-label">Placa</label>

                                          <div class="col-6">
                                            <input type="text" name="vehicle_plate"  id="vehicle_plate" class="form-control @error('vehicle_plate') is-invalid @enderror" value="{{ old('vehicle_plate') }}">
                                          </div>

                                          <div class="col-6">
                                            <input type="text" name="vehicle_plate2"  id="vehicle_plate2" class="form-control @error('vehicle_plate2') is-invalid @enderror" value="{{ old('vehicle_plate2') }}">
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

  let addMaskPlate = document.getElementById('vehicle_plate')
  let im_addPlate = new Inputmask( {mask: 'AAA-9999'},{mask: 'AAA9999'});
  im_addPlate.mask(addMaskPlate)


  let addMaskPlate2 = document.getElementById('vehicle_plate2')
  let im_addPlate2 = new Inputmask( {mask: 'AAA9999'});
  im_addPlate2.mask(addMaskPlate2)

  addMaskPlate.onclick = function(){
    addMaskPlate2.value = ""
  }

  addMaskPlate2.onclick = function(){
    addMaskPlate.value = ""
  }
  

  }//end function window.onload

</script>
@endpush
