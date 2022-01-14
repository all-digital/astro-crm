@extends('layouts.app2')

@section('nav-header')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">TESTE</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

            <style>

                    /* Style the form */
                        #regForm {
                        background-color: #ffffff;
                        margin: 100px auto;
                        padding: 40px;
                        width: 70%;
                        min-width: 300px;
                        }

                        /* Style the input fields */
                        input {
                        padding: 10px;
                        width: 100%;
                        font-size: 17px;
                        font-family: Raleway;
                        border: 1px solid #aaaaaa;
                        }

                        /* Mark input boxes that gets an error on validation: */
                        input.invalid {
                        background-color: #ffdddd;
                        }

                        /* Hide all steps by default: */
                        .tab {
                        display: none;
                        }

                        /* Make circles that indicate the steps of the form: */
                        .step {
                        height: 15px;
                        width: 15px;
                        margin: 0 2px;
                        background-color: #bbbbbb;
                        border: none;
                        border-radius: 50%;
                        display: inline-block;
                        opacity: 0.5;
                        }

                        /* Mark the active step: */
                        .step.active {
                        opacity: 1;
                        }

                        /* Mark the steps that are finished and valid: */
                        .step.finish {
                        background-color: #04AA6D;
                        }                
            </style>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <form id="regForm" action="" style="margin-top:0;">
    
                            <h1>Adicionar Empresa: <span id="valor"></span></h1> 
                            
                            <!-- One "tab" for each step in the form: -->
                            <div class="tab row">
                                <h1 id="valor2">Infomaçoes da Empresa</h1>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="mb-3 row">
                                                <label for=" "
                                                class="col-lg-3 col-form-label">Razão Social</label>

                                                <div class="col-lg-9">
                                                <input placeholder="First name..." oninput="this.className = ''" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                            <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                                            <p><input placeholder="Last darcio master..." oninput="this.className = ''"></p>
                                            <p><input placeholder="First name..." oninput="this.className = ''"></p>
                                        
                                        
                                        <div class="col-md-6">
                                            <p><input placeholder="First name..." oninput="this.className = ''"></p>
                                            <p><input placeholder="Last name..." oninput="this.className = ''"></p>
                                            <p><input placeholder="Last darcio master..." oninput="this.className = ''"></p>
                                            <p><input placeholder="First name..." oninput="this.className = ''"></p>
                                        </div>
                                
                                    </div>
                                </div>
                            <fieldset>
                            <div class="tab">
                                <h1>Infomaçoes de Layout</h1>
                            <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
                            <p><input placeholder="Phone..." oninput="this.className = ''"></p>
                            </div>
                            
                            <div class="tab">
                                <h1>Infomaçoes de Pagamento</h1>
                            <p><input placeholder="dd" oninput="this.className = ''"></p>
                            <p><input placeholder="mm" oninput="this.className = ''"></p>
                            <p><input placeholder="yyyy" oninput="this.className = ''"></p>
                            </div>
                            
                            <div class="tab">
                                <h1>Confirmação</h1>
                            <p><input placeholder="Username..." oninput="this.className = ''"></p>
                            <p><input placeholder="Password..." oninput="this.className = ''"></p>
                            </div>
                            
                            <div style="overflow:auto;">
                            <div style="float:right;">
                                <button type="button" class="btn btn-info" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                            </div>
                            </div>
                            
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            </div>
                            
                        </form>

                    </div>
                </div>
            </div>

          

@endsection


@push('script-js')

  <script>
                    var currentTab = 0; // Current tab is set to be the first tab (0)
                    showTab(currentTab); // Display the current tab

                    function showTab(n) {
                    // This function will display the specified tab of the form ...
                    var x = document.getElementsByClassName("tab");
                    x[n].style.display = "block";
                    // ... and fix the Previous/Next buttons:
                    if (n == 0) {
                        document.getElementById("prevBtn").style.display = "none";
                    } else {
                        document.getElementById("prevBtn").style.display = "inline";
                    }
                    if (n == (x.length - 1)) {
                        document.getElementById("nextBtn").innerHTML = "Enviar";
                    } else {

                        document.getElementById("valor").innerHTML = document.getElementById("valor2").innerHTML

                        document.getElementById("nextBtn").innerHTML = "Next";
                    }
                    // ... and run a function that displays the correct step indicator:
                    fixStepIndicator(n)
                    }

                    function nextPrev(n) {
                    // This function will figure out which tab to display
                    var x = document.getElementsByClassName("tab");
                    // Exit the function if any field in the current tab is invalid:
                    // if (n == 1 && !validateForm()) return false;
                    // Hide the current tab:
                    x[currentTab].style.display = "none";
                    // Increase or decrease the current tab by 1:
                    currentTab = currentTab + n;
                    // if you have reached the end of the form... :
                    if (currentTab >= x.length) {
                        //...the form gets submitted:

                        // alert('enviou o form')
                        

                        document.getElementById("regForm").submit();
                        return false;
                    }
                    // Otherwise, display the correct tab:
                    showTab(currentTab);
                    }

                    function validateForm() {
                    // This function deals with validation of the form fields
                    var x, y, i, valid = true;
                    x = document.getElementsByClassName("tab");
                    y = x[currentTab].getElementsByTagName("input");
                    // A loop that checks every input field in the current tab:
                    for (i = 0; i < y.length; i++) {
                        // If a field is empty...
                        if (y[i].value == "") {
                        // add an "invalid" class to the field:
                        y[i].className += " invalid";
                        // and set the current valid status to false:
                        valid = false;
                        }
                    }
                    // If the valid status is true, mark the step as finished and valid:
                    if (valid) {
                        document.getElementsByClassName("step")[currentTab].className += " finish";
                    }
                    return valid; // return the valid status
                    }

                    function fixStepIndicator(n) {
                    // This function removes the "active" class of all steps...
                    var i, x = document.getElementsByClassName("step");
                    for (i = 0; i < x.length; i++) {
                        x[i].className = x[i].className.replace(" active", "");
                    }
                    //... and adds the "active" class to the current step:
                    x[n].className += " active";
                    }
  </script>
   
       
@endpush