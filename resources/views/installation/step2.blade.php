@extends('layouts.installer')

@section('content')
    <!-- Title -->
    <div class="text-center text-white mb-4">
        <h2>INSTALAÇÃO | SOFTWARE DELIVERY | BRASTOM</h2>
        <h6 class="fw-normal">Prossiga com o passo a passo e informe os dados solicitados de acordo com as instruções.</h6>
    </div>

    <!-- Progress -->
    <div class="pb-2">
        <div class="progress cursor-pointer" role="progressbar" aria-label="INSTALAÇÃO | SOFTWARE DELIVERY | BRASTOM"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip"
             data-bs-placement="top" data-bs-custom-class="custom-progress-tooltip" data-bs-title="3ª Etapa"
             data-bs-delay='{"hide":1000}'>
            <div class="progress-bar" style="width: 40%"></div>
        </div>
    </div>

    <!-- Card -->
    <div class="card mt-4">
        <div class="p-4 mb-md-3 mx-xl-4 px-md-5">
            <div class="d-flex justify-content-end mb-2">
                <a href="https://api.whatsapp.com/send?phone=5531997837045"
                   class="d-flex align-items-center gap-1" target="_blank">
                    Precisa de suporte? Contate nosso WhatsApp!
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                          data-bs-title="Purchase code information">
                        <img src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg" alt=""
                             class="svg">
                    </span>
                </a>
            </div>

            <div class="d-flex align-items-center column-gap-3 flex-wrap">
                <h5 class="fw-bold fs text-uppercase">3ª Etapa </h5>
                <h5 class="fw-normal">Adicione as informações de sua licença.</h5>
            </div>
            <p class="mb-4">Forneça seu <strong>nome de usuário e código de compra</strong> que recebeu em nosso site. </p>

            <form method="POST" action="{{ route('purchase.code',['token'=>bcrypt('step_3')]) }}">
                @csrf
                <div class="bg-light p-4 rounded mb-4">
                    <div class="px-xl-2 pb-sm-3">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="username" class="d-flex align-items-center gap-2 mb-2">
                                        <span class="fw-medium">Nome de Usuário</span>
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true"
                                              data-bs-title="O nome de usuário que recebeu para acesso.">
                                            <img src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info2.svg"
                                                 class="svg" alt="">
                                        </span>
                                    </label>
                                    <input type="text" id="username" class="form-control" name="username"
                                           placeholder="Ex.: BRA529PEOR" value="BRA529PEOR" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="purchase_key" class="mb-2">Código de Compra</label>
                                    <input type="text" id="purchase_key" class="form-control" name="purchase_key"
                                           placeholder="Ex.: 19784523-ca5c-49c2-83f6-696a738b0000" value="19784523-ca5c-49c2-83f6-696a738b0000" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark px-sm-5">Continuar</button>
                </div>
            </form>
        </div>
    </div>
@endsection