
<div class="card task-box" style="border-radius: 10px;" group-id="{{$groupId}}">
                                     
    <div class="card-body">

        <!-- !    TAGS COLORIDAS    -->

        <div class="row">
            <div class="col-3 tag-color" style="background-color: #4339F2;"></div>
            <div class="col-3 tag-color" style="background-color: #FF3838;"></div>
            <div class="col-3 tag-color" style="background-color: #891BE8;"></div>
            <div class="col-3 tag-color" style="background-color: #1AD698;"></div>
        </div>

        <!-- *    IMAGEM DE CAPA    -->

        {{-- <a class="image-popup-no-margins" href="photo.png">                                                
            <img class="img-fluid img-card-banner image-test" alt="" src="photo.png" width="75">
        </a> --}}

        <!-- ?   REGIAO    -->

        <div class="float-right ml-2">
            <span class="badge badge-pill badge-soft-primary font-size-12">
                SP
            </span>
        </div>

        <!-- !  INFOS DO LEAD   -->

        <div>
            <h5 class="font-size-15">
                <a href="javascript: void(0);" class="text-dark">
                    Car System  {{$name ?? 'name ALEATORIO' }} - {{$groupId}}
                </a>
            </h5>
            <ul class="pl-3 mb-4 text-muted">
                <li class="py-1 li-style">Contato Pendente</li>
                <li class="py-1 li-style">Facebook</li>
                <li class="py-1 li-style">CNPJ</li>
            </ul>
        </div>

        <!-- *   PESSOA RESPONSÁVEL OU PESSOAS RESPONSÁVEIS    -->

        <div class="team float-left">

            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1 " alt="Responsáve;">


            <!-- TODO:   PARA OPORTUNIDADES USAR O CODIGO ABAXIO   -->

            <!-- <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs m-1" alt="">


            <div class="avatar-xs  d-inline-block" style="margin-left: -23px;">
                <span class="avatar-title rounded-circle bg-primary text-white">
                    3 +
                </span>
            </div> -->

        </div>

        <!-- <div class="text-right">
            <h5 class="font-size-15 mb-1">R$ 145,00</h5>
            <p class="mb-0 text-muted">Valor Total</p>
        </div> -->
        <div class="text-right">
            <h5 class="font-size-15 mb-1">20/05/2022</h5>
            <p class="mb-0 text-muted">Inserção</p>
        </div>
    </div>

</div>
<!-- end task card -->
