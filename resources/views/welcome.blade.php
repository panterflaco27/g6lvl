@extends('layouts.head')

@section('contenido')
    <!--header-->

    <header id="h">
        <div class="container text-center">
            <div class="row align-items-center">
                <!--logo G6-->
                <div class="col-1">
                    <!--modificar el # por la route definida-->
                    <a href="#h"><img src="{{ asset('img/G6.png') }}" alt="G6"></a>
                </div>
                <div class="col">
                    <div class="container justify-content-end">
                        @if (Route::has('login'))
                            <div class="row justify-content-end">
                            @auth
                                <div class="col-1 col-sm-1">
                                    <a href="{{ url('/home') }}" class="btn">Principal</a>
                                </div>
                            @else
                                <div class="col-1 col-sm-1">
                                    <a href="{{ route('login') }}" class="btn btn-light">Ingresar</a>
                                </div>
                                @if (Route::has('register'))
                                    <div class="col-1 col-sm-1">
                                        <a href="{{ route('register') }}" class="btn btn-secondary btn-reg">Registro</a>
                                    </div>
                                @endif
                            @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!--menu header (navbar)-->

        <div class="navbar">
            <div class="container align-content-center">
                <div class="row mx-auto">
                    <div class="col">
                        <a href="#main" class="nav-a">G6</a>
                    </div>
                    <div class="col">
                        <a href="#blog" class="nav-a">Blog</a>
                    </div>
                    <div class="col">
                        <a href="#contacto" class="nav-a">Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--main (G6) toda la informacion con respecto a que es G6-->

    <section id="main">
        <div class="container align-content-center">
            <div class="row mx-auto">
                <div class="col text-center">

                    <!--titulo llamativo-->

                    <div>
                        <h1 class="h1">
                            ¡Obtén tu diagnóstico digital!
                        </h1>
                    </div>

                    <!--boton de diagnostico (modal log/reg)-->

                    <div>
                        <button type="button" class="btn btn-diag btn-success" data-bs-toggle="modal" data-bs-target="#modal-inicio">Comenzar diagnóstico</button>
                    </div>

                    <!--modal inicio de sesion-->
                    <div class="modal fade" id="modal-inicio" aria-labelledby="modalTitle">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header modal-registro">
                                    <h2 class="modal-title fs-5 mx-auto">¿Ya estás registrado? <br> Inicia sesión ahora mismo!</h2>
                                </div>
                                <div class="modal-body">
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
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-diag">Iniciar sesión</button>
                                        <hr>
                                        <label for="log" class="form-label">
                                            ¿Aún no tienes una cuenta?,
                                            <a href="#" data-bs-target="#modal-registro" data-bs-toggle="modal">¡Regístrate!</a>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--modal registro de usuario-->

                    <div class="modal fade" id="modal-registro" aria-labelledby="modalTitle">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header modal-registro">
                                    <h2 class="modal-title fs-5 mx-auto">¿Aún no tienes una cuenta? <br> Regístrate ahora mismo!</h2>
                                </div>
                                <div class="modal-body">
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
                                            <label for="reg" class="form-label">
                                                ¿Ya estás registrado?,
                                                <a href="#" data-bs-target="#modal-inicio" data-bs-toggle="modal">¡Inicia sesión</a>
                                                ahora mismo!
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!--imagen social media-->
                    <div class="rounded float-md-end">
                        <img src="{{asset('img/Social Media_Monochromatic 1.png')}}" alt="Social Media">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection