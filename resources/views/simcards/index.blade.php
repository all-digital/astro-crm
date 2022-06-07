@extends('layouts.app')

@section('nav-header')
{{-- 
@php
    dd($companies)
@endphp --}}

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">LISTAGEM DE SIMCARDS</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->    
@endsection

@section('content')
    @inject('listCompany', 'App\Models\Companies')  

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                  <div class="section-title-page">
                    <h4 class="card-title">Opcões de Relatório</h4> 
                    <button type="button" class="btn btn-outline-info waves-effect waves-light"
                    data-bs-toggle="modal" data-bs-target="#myModal">NOVO SERVIÇO</button>  
                  </div>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th><strong>Botão</strong></th>
                                <th><strong>Empresa</strong></th>                             
                                <th><strong>Status</strong></th>
                                <th><strong>Usuário de Inserção</strong></th>
                                <th><strong>Data de Inserção</strong></th>
                                <th><strong>Fornecedor</strong></th>
                                <th><strong>Marca</strong></th>                               
                                <th><strong>ICCID</strong></th>
                                <th><strong>Numero da Linha</strong></th>
                                <th><strong>Equipamento</strong></th>
                                <th><strong>Usuário última edição</strong></th>
                                <th><strong>Data da Última Edição</strong></th>                       
                      
                            </tr>
                        </thead>

                        <tbody>
                            {{-- datatable --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->



    {{-- modal para criação de simcard --}}

    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">NOVO SIMCARD
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body">
                              
                              <input type="hidden" id="idCompany" name="idCompany" value="{{auth()->user()->company->id}}">
                              
                              @if (in_array('Super Admin',$permission))
                                <div id="form-create-simcard" >                                 
                                    <div class="mb-3 row">
                                        <label for="company" class="col-md-3 col-form-label">Empresa</label>
                                        <div class="col-md-9">
                                          <select id="company" name="company" class="form-select" aria-label="Default select example">
                                            @foreach ($listCompany->all()->toArray() as $item)

                                                <option value="{{$item['id']}}">{{$item['social_Reason']}}</option>
                                                
                                            @endforeach                                                        
                                          </select>
                                            {{-- <input  name="company" type="text" value="empresa"
                                            id="create-simcard-company" class="form-control"  required>
                                                                                      
                                              <div id="create-simcard-company-error" class="d-none"> 
                                                  <span>campo obrigatorio, minimo de 3 caracteres </span>                                     
                                              </div>                                          --}}

                                        </div>
                                    </div>                                           
                                  
                              @else
                                  <div id="form-create-simcard" >                                 
                                    <div class="mb-3 row">
                                        <label for="company" class="col-md-3 col-form-label">Empresa</label>
                                        <div class="col-md-9">                                      
                                                                  
                                          <input  name="company" type="text" value="{{auth()->user()->company->social_Reason}}"
                                            id="create-simcard-company" class="form-control"  readonly>

                                          <div id="create-simcard-company-error" class="d-none"> 
                                            <span>campo obrigatorio, minimo de 3 caracteres </span>                                     
                                          </div> 

                                        </div>
                                    </div>  
                                  
                              @endif
                                   
                                   
                                   
                                   <div class="mb-3 row" readonly>
                                       <label class="col-md-3 col-form-label" for="status">Status</label>
                                       <div class="col-md-9">                                               
                                           <input id="create-simcard-status" name="status" value="estoque"
                                           class="form-control " readonly>  

                                            <div id="create-simcard-status-error" class="d-none"> 
                                                <span>campo obrigatorio, minimo de 3 caracteres </span>                                     
                                            </div>                                         

                                            
                                       </div>
                                   </div>
                                                                                                                                                           
                                   <div class="mb-3 row">
                                       <label class="col-md-3 col-form-label" for="provider">Fornecedor</label>
                                       <div class="col-md-9">
                                         <div id="provider">
                                           <select id="create-simcard-provider"  name="provider" class="form-select" aria-label="Default select example">
                                               <option value="Allcom" selected>Allcom</option>
                                               <option value="Vivo">Vivo</option>
                                               <option value="Claro">Claro</option>
                                               <option value="Tim">Tim</option>
                                               <option value="Oi">OI</option>
                                               <option value="Arqia">Arqia</option> 
                                               <option value="Sierra">Sierra</option>
                                               <option value="semResultado" class="text-danger">Outros</option>                                                       
                                             </select>
                                         </div>                                        
                                       </div>
                                   </div>
                               
                                   <div class="mb-3 row">
                                     <label class="col-md-3 col-form-label" for="brand">Marca</label>
                                     <div class="col-md-9">                                                
                                       <div id="brand">
                                         <select id="create-simcard-brand"  name="brand" class="form-select" aria-label="Default select example">                                                        
                                             <option value="Vivo" selected>Vivo</option>
                                             <option value="Claro">Claro</option>                                                      
                                             <option value="Tim">Tim</option>
                                             <option value="Oi">OI</option>
                                             <option value="Arqia">Arqia</option> 
                                             <option value="Sierra">Sierra</option>
                                             <option value="semResultado" class="text-danger">Outros</option>                                                         
                                         </select>                                                 
                                       </div>                                      
                                     </div>
                                 
                                 </div>

                                   <div class="mb-3 row">
                                       <label for="iccid" class="col-md-3 col-form-label">ICCID</label>
                                       <div class="col-md-9">
                                           <input name="iccid" type="text" 
                                               id="create-simcard-iccid" class="form-control" >  
                                               
                                            <div id="create-simcard-iccid-error" class="d-none"> 
                                               <span>campo obrigatorio, minimo de 3 caracteres </span>                                     
                                            </div> 

                                       </div>
                                   </div>

                                   <div class="mb-3 row">
                                       <label  class="col-md-3 col-form-label" for="numberLine">Numero da Linha</label>
                                       <div class="col-md-9">
                                           <input type="text" name="numberLine" value="" 
                                               id="create-simcard-numberLine" class="form-control">   
                                               
                                              <div id="create-simcard-lineNumber-error" class="d-none"> 
                                                <span>campo obrigatorio, minimo de 3 caracteres </span>                                     
                                              </div> 
                                       </div>
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
                    <button type="button" id="btn-register" class="btn btn-success waves-effect waves-light">CADASTRAR</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

        <div id="modal-loading" class="modal-container-loading to-hide">
            <div class="c-loading"> </div>
        </div>

    <!-- /.modal -->
    </div>
                            


@endsection

@push('script-js')        
    <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    {{-- <!-- Datatable init js -->  {{--exemplo datatable --}}
    {{-- <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

@endpush

@push('customized-js')

    <script>

            let simcards = {{ Js::from($simcards)}};
                             console.log(simcards)
                                        
            $(document).ready(function(){

                $("#datatable").DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                            'excel',
                            'csv',                            
                            'print',
                            'pageLength',         
                            'colvis',
                            ],
                
                        data: simcards,
                        columns: [
                            {data: 'button'},
                            {data: 'company'},
                            {data: 'status'},
                            { data: 'responsible_for_insert' },
                            { data: 'created_at' },
                            { data: 'provider'},                          
                            { data: 'brand'},
                            { data: 'iccid'},
                            { data: 'number_of_line' },                            
                            { data: 'id' }, //Equipamento
                            { data: 'responsible_last_updated' },
                            { data: 'updated_at' },
                                                                         
                        ]               
                })
                                                
            });



          let provider = document.getElementById('provider')
          
          provider.addEventListener('change', function(){

              if(provider.children[0].value == "semResultado")
              {  
                provider.innerHTML = `<div>
                  <span class="text-danger">Insira o nome do fornecedor<span> 
                  <input type="text" id="create-simcard-provider" name="provider" class="form-control"  placeholder="Insira o nome do fornecedor" required>            
                </div>`
                  
              }    
          })


          let brand = document.getElementById('brand')
          
          brand.addEventListener('change', function(){

              if(brand.children[0].value == "semResultado")
              {  
                brand.innerHTML = `<div>
                  <span class="text-danger">Insira o nome da Marca<span> 
                  <input type="text" id="create-simcard-brand" name="brand" class="form-control" placeholder="Insira o nome do marca" required>            
                </div>`
                  
              }    
          })



          /////////////////////

          register = document.getElementById('btn-register')

          register.addEventListener("click", function(e){
              e.preventDefault()

              
              let company = document.getElementById('create-simcard-company')
              let status = document.getElementById('create-simcard-status')
              let provider = document.getElementById('create-simcard-provider')  
              let brand = document.getElementById('create-simcard-brand')
              let iccid = document.getElementById('create-simcard-iccid')
              let lineNumber = document.getElementById('create-simcard-numberLine')
              let idCompany = document.getElementById('idCompany')

              console.log(company.value,status.value,provider.value,brand.value,iccid.value, lineNumber.value)
              console.log(company,status,provider,brand,iccid, lineNumber)



              //validando os inputs 
              if(company.value.length <= 2)
              {
                company.classList.add('is-invalid')

                let companyError = document.getElementById('create-simcard-company-error')                
                companyError.classList.add('invalid-feedback')
                companyError.classList.remove('d-none')
                   
              }else{
                company.classList.remove('is-invalid')
              }

             
              if(status.value.length <= 2)
              {
                status.classList.add('is-invalid')
                
                let statusError = document.getElementById('create-simcard-status-error')                
                statusError.classList.add('invalid-feedback')
                statusError.classList.remove('d-none')

              }else{
                status.classList.remove('is-invalid')
              }

              
              if(provider.value.length <= 1)
              {
                provider.classList.add('is-invalid')
                
                let providerError = document.getElementById('create-simcard-provider-error')                
                providerError.classList.add('invalid-feedback')
                providerError.classList.remove('d-none')
              }else{
                provider.classList.remove('is-invalid')
              }

              
              if(brand.value.length <= 1)
              {
                brand.classList.add('is-invalid')

                let brandError = document.getElementById('create-simcard-brand-error')                
                brandError.classList.add('invalid-feedback')
                brandError.classList.remove('d-none')
                
              }else{
                brand.classList.remove('is-invalid')
              }

              
              if(iccid.value.length <= 2)
              {
                iccid.classList.add('is-invalid')
                
                let iccidError = document.getElementById('create-simcard-iccid-error')                
                iccidError.classList.add('invalid-feedback')
                iccidError.classList.remove('d-none')
              }else{
                iccid.classList.remove('is-invalid')
              }

              
              if(lineNumber.value.length <= 2)
              {
                lineNumber.classList.add('is-invalid')
                
                let lineNumberError = document.getElementById('create-simcard-lineNumber-error')                
                lineNumberError.classList.add('invalid-feedback')
                lineNumberError.classList.remove('d-none')

              }else{
                lineNumber.classList.remove('is-invalid')
              }

              /////////////////////////////////////////////////


              if(!(
                    company.classList.contains("is-invalid")  ||  status.classList.contains("is-invalid") ||
                    provider.classList.contains("is-invalid") ||  brand.classList.contains("is-invalid")  ||
                    iccid.classList.contains("is-invalid")    ||  lineNumber.classList.contains("is-invalid")                                 
                ))                    
                {
                    let loading = document.getElementById("modal-loading")
                    loading.classList.remove('to-hide')

                    let simcard = {
                        company:     company.value,
                        status:      status.value,
                        provider:    provider.value,
                        brand:       brand.value,
                        iccid:       iccid.value,
                        numberLine:  lineNumber.value,
                        idCompany:   idCompany.value

                    }
                                        
                    fetch('api/simcard-create',{ 
                        method:'post',        
                        body: JSON.stringify(simcard),                        
                        headers:{
                                    "Content-type":"application/json",
                                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }    
                        })            
                        .then(res=> res.json())
                        .then(res => { 
                            
                          if(res.refreshScreen == true ){                            
                             location.reload()
                          }else{
                             alert(res.status)
                          }

                            loading.classList.add('to-hide')                           
                        })
                            
                        .catch((e)=> {console.log("erro => ", e)} )

                }




              
          })//end function envent modal
           
    </script>    



    
@endpush
