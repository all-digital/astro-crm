@extends('layouts.app2')

@section('nav-header')

      <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">EMPRESAS</h4>

                        </div>
                    </div>
                </div>
      <!-- end page title -->

@endsection


@section('content')
     
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Adicionar Empresa</h4>

                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">
                        <h3>Informações da Empresa</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">

                                        <label for="txtFirstNameBilling"
                                            class="col-lg-3 col-form-label">CNPJ
                                        </label>

                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="txtFirstNameBilling"
                                                type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtLastNameBilling"
                                            class="col-lg-3 col-form-label">Razão Social</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="txtLastNameBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCompanyBilling"
                                            class="col-lg-3 col-form-label">Nome Fantasia</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="txtCompanyBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtEmailAddressBilling"
                                            class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling"
                                                type="text" readonly value="Ativo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtAddress1Billing"
                                            class="col-lg-3 col-form-label">Responsável</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtAddress2Billing"
                                            class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling"
                                            type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        
                        <h3>Informações de Layout</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtFirstNameShipping"
                                            class="col-lg-3 col-form-label">Cor Principal</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping"
                                                type="color" class="form-control" style="padding: 15px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtLastNameShipping"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="txtLastNameShipping"
                                                type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="txtCityShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping"
                                                name="txtStateProvinceShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>


                        <h3>Informações de Pagamento</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Mensalidade</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" name="txtNameCard" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="ddlCreditCardType"
                                            class="col-lg-3 col-form-label">Ativação</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber"
                                            type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCreditCardNumber"
                                            class="col-lg-3 col-form-label">Preço por Placa</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCardVerificationNumber"
                                            class="col-lg-3 col-form-label">Limite de Usuários</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber"
                                                name="txtCardVerificationNumber" type="number" value="5"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtExpirationDate"
                                            class="col-lg-3 col-form-label">Preço por usuário extra</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" name="txtExpirationDate"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <h3>Confirmação</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">

                                        <label for="txtFirstNameBilling"
                                            class="col-lg-3 col-form-label">CNPJ
                                        </label>

                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" readonly name="txtFirstNameBilling"
                                                type="text" class="form-control">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtLastNameBilling"
                                            class="col-lg-3 col-form-label">Razão Social</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" readonly name="txtLastNameBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCompanyBilling"
                                            class="col-lg-3 col-form-label">Nome Fantasia</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" readonly name="txtCompanyBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtEmailAddressBilling"
                                            class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="txtEmailAddressBilling"
                                                type="text" readonly value="Ativo" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtAddress1Billing"
                                            class="col-lg-3 col-form-label">Responsável</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="txtEmailAddressBilling"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtAddress2Billing"
                                            class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="txtEmailAddressBilling"
                                            type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtFirstNameShipping"
                                            class="col-lg-3 col-form-label">Cor Principal</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" readonly name="txtFirstNameShipping"
                                                type="color" class="form-control" style="padding: 15px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtLastNameShipping"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" readonly name="txtLastNameShipping"
                                                type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" readonly name="txtCityShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping"
                                                name="txtStateProvinceShipping" readonly type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Mensalidade</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" readonly name="txtNameCard" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="ddlCreditCardType"
                                            class="col-lg-3 col-form-label">Ativação</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" readonly name="txtCreditCardNumber"
                                            type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCreditCardNumber"
                                            class="col-lg-3 col-form-label">Preço por Placa</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" readonly name="txtCreditCardNumber"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCardVerificationNumber"
                                            class="col-lg-3 col-form-label">Limite de Usuários</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber"
                                                name="txtCardVerificationNumber" readonly type="number" value="5"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtExpirationDate"
                                            class="col-lg-3 col-form-label">Preço por usuário extra</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" readonly name="txtExpirationDate"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->       

@endsection


@push('script-js')
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- form wizard -->
    <script src="assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- form wizard init -->
    <script src="assets/js/pages/form-wizard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
@endpush