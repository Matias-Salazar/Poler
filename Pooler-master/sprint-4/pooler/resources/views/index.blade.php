@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 hero" id="hero">
                <div class="bg-opacity"></div>
                <div class="hero-wrapper">
                    <h1>P<span>oo</span>ler</h1>
                    <p>Somos una red social, donde vas a poder crear un <span
                                class="logo-color-secundary">Pool</span>,
                    mostrar tu idea o proyecto a la comunidad y ver como
                    se suman otros <span class="logo-color-secundary">Poolers</span>. También vos vas a poder descubrir
                    distintos <span class="logo-color-secundary">Pools</span> y sumarte.</p>
                    <p class="welcome-message">Ya somos <span>x</span> usuarios</p>
                    <a href="{{ route('login') }}"><button class="center-block btn-principal">Registrate</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="hero-text">
                <div class="col-xs-12 col-sm-6 col-md-6 hero-wrapper">
                    <h3>¿Qué es un <span class="logo-color-principal">Pooler</span> ?</h3>
                    <p><span class="logo-color-principal">Pooler</span> se le denomina a cada integrante de la red social. Así como alguien que crea un proyecto es Pooler,
                    también lo son las personas que se unen al mismo, creando un <span
                                class="logo-color-principal">Pool</span> donde se agrupan varios Poolers  que
                    comparten un mismo objetivo.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 hero-wrapper">
                    <h3>¿Qué es un <span class="logo-color-principal">Pool</span> ?</h3>
                    <p><span class="logo-color-principal">Pool</span> es una publicación de una idea o proyecto. Puede ser un viaje en auto hacia algun lugar, ir de compras,
                    armar una banda de música. Deberás especificar cuantos <span class="logo-color-principal">Poolers</span> necesitás, fechas, horarios, destino como
                    también podrás adjuntar fotos o videos.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 how-works" id="how-works">
                <h2 class="text-center">¿ Cómo funciona ?</h2>
                    <div class="col-xs-12 col-md-4 how-works-wrapper">
                        <img src="assets/register-icon.png" alt="register-icon"
                             class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4 class="text-center">Te registras como Pooler</h4>
                            <p class="text-center">Completando el formulario, se te dara un nombre de usuario</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 how-works-wrapper">
                        <img src="assets/form-icon.png" alt="form-icon" class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4 class="text-center">Publicas tu Pool</h4>
                            <p class="text-center">Ingresando título, descripcion, categoria y algunos datos mas, podras publicar tu Pool.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 how-works-wrapper">
                        <img src="assets/gallery-icon.png" alt="gallery-icon"
                             class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4 class="text-center">Navega entre los Pools</h4>
                            <p class="text-center">Podras filtrar por ubicacion, actividad para unirte a distintos Pools.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pools-wrapper">
                <h2 class="text-center">Descubrí otros Pools</h2>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="pool-wrapper">
                        <img class="img-responsive" src="/assets/gallery-asset/gallery-1.jpg" alt="img-1">
                        <div class="item-wrapper">
                            <div class="desc-wrapper">
                                <h3>Partido de futbol</h3>
                                <p>Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            </div>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user-wrapper">
                                <span>@colomfernando</span>
                            </div>
                            <div class="btn-wrapper">
                                <button><a href="">+</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="pool-wrapper">
                        <img class="img-responsive" src="/assets/gallery-asset/gallery-2.jpg" alt="img-1">
                        <div class="item-wrapper">
                            <div class="desc-wrapper">
                                <h3>Partido de futbol</h3>
                                <p>Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            </div>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user-wrapper">
                                <span>@colomfernando</span>
                            </div>
                            <div class="btn-wrapper">
                                <button><a href="">+</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="pool-wrapper">
                        <img class="img-responsive" src="/assets/gallery-asset/gallery-3.jpg" alt="img-1">
                        <div class="item-wrapper">
                            <div class="desc-wrapper">
                                <h3>Partido de futbol</h3>
                                <p>Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            </div>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user-wrapper">
                                <span>@colomfernando</span>
                            </div>
                            <div class="btn-wrapper">
                                <button><a href="">+</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
