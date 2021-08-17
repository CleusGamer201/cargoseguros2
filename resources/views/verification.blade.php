@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Esperando que un administrador verifique su información...') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                    <img class="rounded mx-auto d-block" width="100px"src="{{asset('img/cancel.png')}}">
                    <br>
                    <br>
                    <br>
                    <div class="h3 text-center">Debes esperar que un administrador verifique tu información</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
