
@extends('template.base')
@section('title')
@endsection



@section('content')

<br><br><br>

<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrate') }}</div>

                <div class="card-body">
                    <form method="POST" class="user-form" action="{{ route('register') }}">


                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <div class="invalid-feedback"></div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="avatar" class="col-md-4 col-form-label text-md-right">Imagen de perfil</label>

            							     <div class="col-md-6">
            								          <input type="file" class="custom-file-input" accept="image/jpeg" name="userAvatar">
            							           <label class="custom-file-label" for="customFile">Elegir imagen</label>
            								          <span style="color:red; font-size:12px;"> <?php // if(isset($errorAvatar)){echo $errorAvatar;} ; ?> </span>
            							       </div>
                          </div>
            							<br>

                          <div class="form-group row">

              							         <label for="country" class="col-md-4 col-form-label text-md-right">País de nacimiento</label>
                                     <div class="col-md-6">
              							         <select class="form-control countries" name="country">
              								           <option value="">Elegí tu país</option>

              							           </select>
              							           <div class="invalid-feedback"></div>
              						          </div>
                            </div>

                          <div id="fieldProvince" class="" name="province"></div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    {{ __('Enviar Registro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>

@endsection


@section('custom-js')
<script src={{ asset('/js/signUpValidator.js')}} ></script>
<script src={{ asset('/js/api.js')}} ></script>
@endsection
