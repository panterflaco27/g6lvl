@extends('layouts.head')

@section('contenido')
    <header id="h">
        <div class="container text-end">
            <div class="row align-items-center">
                <!--logo G6-->
                <div class="col-1">
                    <a href="#h"><img src="{{ asset('img/G6.png') }}" alt="G6"></a>
                </div>
                <!--boton de logout-->
                <div class="col">
                    <div class="container justify-content-end btn-logout">
                        @guest
                            @if (Route::has('login'))
                                <div class="container justify-content-end">
                                    <a href="{{route('login')}}" class="btn btn-light">{{__('Iniciar sesion')}}</a>
                                </div>
                            @endif
                    
                            @if (Route::has('register'))
                                <div class="container justify-content-end">
                                    <a href="{{route('register')}}" class="btn btn-secondary btn-reg">{{__('Registrar')}}</a>
                                </div>
                            @endif
                        @else
                            <div class="justify-content-end">
                                <div class="row">
                                    <div class="col">
                                        <a href="#" id="navbar" role="button" class="user-a btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                            </svg>
                                            {{ Auth::user()->nombre }}
                                        </a>
                                        <a href="{{route('logout')}}" class="btn btn-primary btn-reg btn-danger"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{__('Salir')}}
                                        </a>
                                        <form action="{{route('logout')}}" method="post" id="logout-form">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <!--menu header (navbar)-->

        <div class="navbar">
            <div class="container align-items-center">
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

                    <!--titulo llamantivo-->

                    <div>
                        <h1 class="h1">
                            ¡Obtén tu diagnóstico digital!
                        </h1>
                    </div>

                    <!--boton formulario de diagnostico-->
                    <div>
                        <button type="button" class="btn btn-diag btn-success" data-bs-toggle="modal" data-bs-target="#modal-diag">Comenzar diagnóstico</button>
                    </div>

                </div>

                <!--modal de diagnostico-->
                <!--
                    si no funciona, agregar lo siguiente
                     tabindex="-1" role="dialog"
                -->
                <div class="modal fade" id="modal-diag" aria-labelledby="modalTitle" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!--header-->

                            <div class="modal-header modal-registro">
                                <h2 class="modal-title fs-5 mx-auto">Diagnóstico digital</h2>
                                <div class="col-sm-1 text-end">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>

                            <!--body-->

                            <div class="modal-body">
                                <!--agregar los archivos de la carpeta de controlador de formulario y verificar bien los metodos para que no falle como el proyecto anterior-->
                                <form id="formPasos" action="" method="post">
                                    <!--paso 1-->
                                    <div class="step" id="step1">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con un correo electrónico?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-correo" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-correo" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 2-->
                                    <div class="step" id="step2">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Sabe utilizar la paquetería de Office (Word, Excel, PowerPoint, etc…)?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-paq" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-paq" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 3-->
                                    <div class="step" id="step3">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">Cual(es) de las siguientes aplicaciones utiliza para comunicarse:</h3>
                                            <div class="form-check col">
                                                <div class="col-2 mx-auto">
                                                    <input type="checkbox" class="form-check-input" name="check-face" id="facebook" value="facebook">
                                                    <label for="facebook" class="form-check-label">Facebook</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="checkbox" class="form-check-input" name="check-whp" id="whatsapp" value="whatsapp">
                                                    <label for="whatsapp" class="form-check-label">Whatsapp</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="checkbox" class="form-check-input" name="check-ins" id="instagram" value="instagram">
                                                    <label for="instagram" class="form-check-label">Instagram</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="checkbox" class="form-check-input" name="check-tk" id="tiktok" value="tiktok">
                                                    <label for="tiktok" class="form-check-label">Tiktok</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="checkbox" class="form-check-input" name="check-tlm" id="telegram" value="telegram">
                                                    <label for="telegram" class="form-check-label">Telegram</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Utiliza esas aplicaciones para comunicarse con sus clientes y/o familiares?</h3>
                                        
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-com" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-com" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 4-->
                                    <div class="step" id="step4">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con una página web para ofrecer sus servicios?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-pw" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-pw" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con un canal de YouTube?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-yt" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-yt" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con alguna Fanpage o algún blog para promocionar su empresa?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-fp" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-fp" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 5-->
                                    <div class="step" id="step5">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Sabe utilizar laptop o pc?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-pc" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-pc" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Sabe utilizar tabletas o smartphone?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-tb" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-tb" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 6-->
                                    <div class="step" id="step6">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Tiene experiencia sobre el marketing digital?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-md" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-md" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cree usted que es una herramienta útil para aumentar la popularidad de su empresa?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-hm" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-hm" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--paso 7-->
                                    <div class="step" id="step7">
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuentas con información de los clientes?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-ic" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-ic" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con los Email de los clientes?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-ec" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-ec" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <h3 class="fs-6 mx-auto">¿Cuenta con los números telefónicos de los clientes?</h3>
                                            <div class="form-check">
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-nc" id="radio-si" value="si">
                                                    <label for="radio-si" class="form-check-label">Si</label>
                                                </div>
                                                <div class="col-2 mx-auto">
                                                    <input type="radio" class="form-check-input" name="radio-nc" id="radio-no" value="no">
                                                    <label for="radio-no" class="form-check-label">no</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="prevBtn">Anterior</button>
                                        <button type="button" class="btn btn-primary" id="nextBtn">Siguiente</button>
                                        <button type="submit" class="btn btn-primary" id="submitBtn">Enviar</button>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--imagen generica-->
                <div class="col">
                    <!--imagen social media-->
                    <div class="rounded float-md-end">
                        <img src="{{asset('img/Social Media_Monochromatic 1.png')}}" alt="Social Media">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            var currentStep = 1;
            var steps = $('.step');
            var prevBtn = $('#prevBtn');
            var nextBtn = $('#nextBtn');
            var submitBtn = $('#submitBtn');

            // Ocultar todos los pasos excepto el primero
            steps.slice(1).hide();
            
            // Botón "Anterior"
            prevBtn.click(function() {
                if (currentStep > 1) {
                    currentStep--;
                    showStep(currentStep);
                }
            });

            // Botón "Siguiente"
            nextBtn.click(function() {
                if (currentStep < steps.length) {
                    currentStep++;
                    showStep(currentStep);
                }
            });

            // Mostrar el paso actual
            function showStep(step) {
                steps.hide();
                $('#step' + step).show();

                // Actualizar la visibilidad de los botones de navegación
                if (step === 1) {
                    prevBtn.hide();
                } else {
                    prevBtn.show();
                }

                if (step === steps.length) {
                    nextBtn.hide();
                    submitBtn.show();
                } else {
                    nextBtn.show();
                    submitBtn.hide();
                }
            }

            // Enviar el formulario
            $('#formPasos').submit(function(event) {
                event.preventDefault();
                $('#modal-diag').modal('hide');
            });
        });
    </script>
@endsection