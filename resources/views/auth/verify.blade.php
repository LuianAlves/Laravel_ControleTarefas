@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificação de Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Reenviamos o link para seu email.') }}
                        </div>
                    @endif

                    {{ __('Falta pouco Agora!') }} <br>
                    {{ __('Precisamos apenas que verifique em seu o email o recebimento do link de validação.') }} <br>
                    {{ __('Caso não tenha recebido o link') }}
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('clique aqui') }}</button>{{ __(' para enviar novamente.') }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
