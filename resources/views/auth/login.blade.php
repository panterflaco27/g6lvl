@extends('layouts.head')

@section('contenido')
    <section class="vh-100 f-log">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-header text-center header-logreg">
                    <h3>¡Iniciar sesión ahora mismo!</h3>
                </div>
                <div class="card-body p-3 text-center">
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="flex-col">
                            <label for="email" class="col-form-label">Correo:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
                            <label for="password" class="col-form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <input type="checkbox" class="form-check-input" id="remember" name="remenber">
                            <label for="remember" class="form-check-lable">Mantener iniciado</label>
                            <!--falta implementar el reestablecimiento de contraseña-->
                            <a href="#" class="">¿Olvidó su contraseña?</a>

                            @error('password' | 'email')
                                <p class="form-text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-diag">Iniciar sesión</button>
                        <hr>
                        <div class="row">
                            <label for="log" class="form-label">
                                ¿Aún no tienes una cuenta?,
                                <a href="{{ route('register') }}">¡Regístrate!</a>
                            </label>
                            <label for="" class="form-label">
                                <a href="/">Volver a G6</a>
                            </label>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection