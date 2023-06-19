@extends('layouts.head')

@section('contenido')
<section class="vh-100 f-log">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-6">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-header text-center header-logreg">
                <h3>¡Registrate ahora mismo!</h3>
            </div>
            <div class="card-body p-3 text-center">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="col">
                        <div class="row mx-auto">
                            <div class="col">
                                <label for="nombre" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                                @error('nombre')
                                    <p class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="appat" class="col-form-label">Apellido paterno:</label>
                                <input type="text" class="form-control" id="appat" name="appat">
                                @error('appat')
                                    <p class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="apmat" class="col-form-label">Apellido materno:</label>
                                <input type="text" class="form-control" id="apmat" name="apmat">
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="col">
                                <label for="email" class="col-form-label">Correo electrónico:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
                                @error('email')
                                    <p class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="col">
                                <label for="password" class="col-form-label">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                @error('password')
                                    <p class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="password_confirmation" class="col-form-label">Validar contraseña:</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                    <p class="form-text text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mx-auto" style="padding-top: 15px">
                            <button type="submit" class="btn btn-primary btn-diag">Registrarse</button>
                        </div>
                        <hr>
                        <div class="row">
                            <label for="reg" class="form-label">
                                ¿Ya estás registrado?,
                                <a href="{{ route('login') }}">¡Inicia sesión</a>
                                ahora mismo!
                            </label>
                            <label for="" class="form-label">
                                <a href="/">Volver a G6</a>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection