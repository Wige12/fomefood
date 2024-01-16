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
             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip"
             data-bs-placement="top" data-bs-custom-class="custom-progress-tooltip" data-bs-title="2ª Etapa"
             data-bs-delay='{"hide":1000}'>
            <div class="progress-bar" style="width: 20%"></div>
        </div>
    </div>

    <!-- Card -->
    <div class="card mt-4">
        <div class="p-4 mb-md-3 mx-xl-4 px-md-5">
            <div class="d-flex justify-content-end mb-2">
                <a href="https://api.whatsapp.com/send?phone=5531997837045" class="d-flex align-items-center gap-1"
                   target="_blank">
                    Precisa de suporte? Contate nosso WhatsApp!
                    <span data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                          data-bs-title="Follow our documentation">

                                <img src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg"
                                     class="svg" alt="">
                            </span>
                </a>
            </div>

            <div class="d-flex align-items-center column-gap-3 flex-wrap mb-4">
                <h5 class="fw-bold fs text-uppercase">2ª Etapa </h5>
                <h5 class="fw-normal">Verifique as permissões dos arquivos no servidor.</h5>
            </div>

            <div class="bg-light p-4 rounded mb-4">
                <h6 class="fw-bold text-uppercase fs m-0 letter-spacing  mb-4 pb-sm-3" style="--fs: 14px">
                    Verifique as Permissões Abaixo
                </h6>

                <div class="px-xl-2 pb-sm-3">
                    <div class="row g-4 g-md-5">
                        <div class="col-md-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img
                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/php-version.svg"
                                    alt="">
                                <div
                                    class="d-flex align-items-center gap-2 justify-content-between flex-grow-1">
                                    PHP Versão 8.1 +

                                    @php($phpVersion = number_format((float)phpversion(), 2, '.', ''))
                                    @if ($phpVersion >= 8.1)
                                        <img width="20"
                                             src="{{asset('public/assets/installation')}}/assets/img/svg-icons/check.png"
                                             alt="">
                                    @else
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true" data-bs-delay='{"hide":1000}'
                                              data-bs-title="Sua versão do PHP no servidor é inferior à versão 8.1 .
                                                   <a href='https://support.cpanel.net/hc/en-us/articles/360052624713-How-to-change-the-PHP-version-for-a-domain-in-cPanel-or-WHM'
                                                   class='d-block' target='_blank'>Veja como atualizar.</a> ">
                                                <img
                                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg"
                                                    class="svg text-danger" alt="">
                                            </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img
                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/curl-enabled.svg"
                                    alt="">
                                <div
                                    class="d-flex align-items-center gap-2 justify-content-between flex-grow-1">
                                    Curl Habilitado

                                    @if ($permission['curl_enabled'])
                                        <img width="20"
                                             src="{{asset('public/assets/installation')}}/assets/img/svg-icons/check.png"
                                             alt="">
                                    @else
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true" data-bs-delay='{"hide":1000}'
                                              data-bs-title="A extensão Curl não está habilitada em seu servidor. Para habilitar vá para Versão PHP > Extensões e selecione Curl.">
                                                <img
                                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg"
                                                    class="svg text-danger" alt="">
                                            </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img
                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/route-service.svg"
                                    alt="">
                                <div
                                    class="d-flex align-items-center gap-2 justify-content-between flex-grow-1">
                                    .env Permissão de Arquivo

                                    @if ($permission['db_file_write_perm'])
                                        <img width="20"
                                             src="{{asset('public/assets/installation')}}/assets/img/svg-icons/check.png"
                                             alt="">
                                    @else
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true" data-bs-delay='{"hide":1000}'
                                              data-bs-title="...">
                                                <img
                                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg"
                                                    class="svg text-danger" alt="">
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-3 align-items-center">
                                <img
                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/route-service.svg"
                                    alt="">
                                <div
                                    class="d-flex align-items-center gap-2 justify-content-between flex-grow-1">
                                    RouteServiceProvider.php Permissão de Arquivo


                                    @if ($permission['routes_file_write_perm'])
                                        <img width="20"
                                             src="{{asset('public/assets/installation')}}/assets/img/svg-icons/check.png"
                                             alt="">
                                    @else
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true" data-bs-delay='{"hide":1000}'
                                              data-bs-title="...">
                                                <img
                                                    src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info.svg"
                                                    class="svg text-danger" alt="">
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <p>Todas as permissões foram fornecidas com sucesso? </p>

                @if ($permission['curl_enabled'] == 1 && $permission['db_file_write_perm'] == 1 && $permission['routes_file_write_perm'] == 1 && $phpVersion >= 8.1)
                    <a href="{{ route('step2',['token'=>bcrypt('step_2')]) }}" class="btn btn-dark px-sm-5">Prosseguir</a>
                @endif
            </div>
        </div>
    </div>
@endsection
