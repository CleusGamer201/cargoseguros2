@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="identification" class="col-md-4 col-form-label text-md-right">{{ __('Identificación') }}</label>

                            <div class="col-md-6">
                                <input id="identification" type="text" class="form-control @error('identification') is-invalid @enderror" name="identification" value="{{ old('identification') }}" required autocomplete="identification" autofocus>

                                @error('identification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="businessname" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessname" type="text" class="form-control @error('businessname') is-invalid @enderror" name="businessname" value="{{ old('businessname') }}" required autocomplete="businessname" autofocus>

                                @error('businessname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="businessidentification" class="col-md-4 col-form-label text-md-right">{{ __('Identificación de la empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessidentification" type="text" class="form-control @error('businessidentification') is-invalid @enderror" name="businessidentification" value="{{ old('businessidentification') }}" required autocomplete="businessidentification" autofocus>

                                @error('businessidentification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="businessphone" class="col-md-4 col-form-label text-md-right">{{ __('Celular de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessphone" type="text" class="form-control @error('businessphone') is-invalid @enderror" name="businessphone" value="{{ old('businessphone') }}" required autocomplete="businessphone" autofocus>

                                @error('businessphone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="businessemail" class="col-md-4 col-form-label text-md-right">{{ __('Correo de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessemail" type="businessemail" class="form-control @error('businessemail') is-invalid @enderror" name="businessemail" value="{{ old('businessemail') }}" required autocomplete="businessemail">

                                @error('businessemail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="businessdepartment" class="col-md-4 col-form-label text-md-right">{{ __('Departamento de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessdepartment" type="businessdepartment" class="form-control @error('business_departament') is-invalid @enderror" name="businessdepartment" value="{{ old('businessdepartment') }}" required autocomplete="businessdepartment">

                                @error('businessdepartment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="businessmunicipality" class="col-md-4 col-form-label text-md-right">{{ __('Municipio de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessmunicipality" type="businessmunicipality" class="form-control @error('businessmunicipality') is-invalid @enderror" name="businessmunicipality" value="{{ old('businessmunicipality') }}" required autocomplete="businessmunicipality">

                                @error('businessmunicipality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="businessaddress" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de la Empresa') }}</label>

                            <div class="col-md-6">
                                <input id="businessaddress" type="businessaddress" class="form-control @error('businessaddress') is-invalid @enderror" name="businessaddress" value="{{ old('businessaddress') }}" required autocomplete="businessaddress">

                                @error('businessaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                                                                                            
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
