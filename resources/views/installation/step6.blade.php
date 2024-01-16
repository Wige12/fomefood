@extends('layouts.installer')

@section('content')
    <!-- Title -->
    <div class="text-center text-white mb-4">
        <h2>INSTALAÇÃO | SOFTWARE DELIVERY | BRASTOM</h2>
        <h6 class="fw-normal">Tudo feito, ótimo trabalho. Seu software está pronto para ser executado. <a style="color:red;" href="https://api.whatsapp.com/send?phone=5531997837045" target="_blank">Suporte Técnico BRASTOM</a></h6>
    </div>

    <!-- Card -->
    <div class="card mt-4">
        <div class="p-4 mb-md-3 mx-xl-4 px-md-5">
            <div class="p-4 rounded mb-4 text-center">
                <h5 class="fw-normal">Faça as seguintes configurações para executar o sistema corretamente. A equipe de suporte técnico padrão da Brastom não faz estas configurações, mas pode auxiliar com dúvidas.</h5>

                <ul class="list-group mar-no mar-top bord-no">
                    <li class="list-group-item">Configurações de Negócio</li>
                    <li class="list-group-item">Configurações de E-mail</li>
                    <li class="list-group-item">Configurações de Métodos de Pagamento</li>
                    <li class="list-group-item">Configurações de SMS</li>
                    <li class="list-group-item">Configurações de APIs de Terceiros</li>
                </ul>
            </div>

            <div class="text-center">
                <a href="{{ env('APP_URL') }}" target="_blank" class="btn btn-secondary px-sm-5">Landing Page</a>
                @php
                $data = \App\Models\DataSetting::where('type', 'login_admin')->pluck('value')->first() ?? 'admin';
                @endphp
                <a href="{{ env('APP_URL') }}/login/{{$data}}" target="_blank" class="btn btn-dark px-sm-5">Painel Administrativo</a>
            </div>
        </div>
    </div>
@endsection
