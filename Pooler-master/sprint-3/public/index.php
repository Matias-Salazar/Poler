<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'meta-head.php'?>
    <title>Pooler</title>
</head>
<body>
    <header>
        <nav class="grid">
            <div class="col-1_xs-1 logo"><a href="index.php"><img class="img-responsive" src="assets/logo-pooler.png" alt="logo"></a></div>
            <ul class="col-7_xs-11 menu">
                <li><a class="nav-link" href="#hero">¿Qué es?</a></li>
                <li><a class="nav-link" href="#how-works">¿Cómo funciona?</a></li>
                <li><a class="nav-link" href="#faq">Faq</a></li>
            </ul>
            <div class="col-4_xs-12 nav-buttons">
                <a href="register.php"><button class="btn-principal register-btn">Registrate</button></a>
                <a href="login.php"><button class="btn-secondary">Ingresa</button></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="grid">
            <div class="col-12 hero" id="hero">
                <div class="bg-opacity"></div>
                <div class="hero-wrapper">
                    <h1>P<span>oo</span>ler</h1>
                    <p>Somos una red social, donde vas a poder crear un <span class="logo-color-secundario">Pool</span>,
                    mostrar tu idea o proyecto a la comunidad y ver como
                    se suman otros <span class="logo-color-secundario">Poolers</span>. También vos vas a poder descubrir
                    distintos <span class="logo-color-secundario">Pools</span> y sumarte.</p>
                    <a href="register.php"><button class="btn-principal">Registrate</button></a>
                </div>
            </div>
            <div id="text-section" class="grid_12 hero-text">
                <div class="col-6_md-6_sm_12_xs-12 hero-wrapper">
                    <h3>¿Qué es un <span class="logo-color-principal">Pooler</span> ?</h3>
                    <p><span class="logo-color-principal">Pooler</span> se le denomina a cada integrante de la red social. Así como alguien que crea un proyecto es Pooler,
                    también lo son las personas que se unen al mismo, creando un <span class="logo-color-principal">Pool</span> donde se agrupan varios Poolers  que
                    comparten un mismo objetivo.</p>
                </div>
                <div class="col-6_md-6_sm_12_xs-12 hero-wrapper">
                    <h3>¿Qué es un <span class="logo-color-principal">Pool</span> ?</h3>
                    <p><span class="logo-color-principal">Pool</span> es una publicación de una idea o proyecto. Puede ser un viaje en auto hacia algun lugar, ir de compras,
                        armar una banda de música. Deberás especificar cuantos <span class="logo-color-principal">Poolers</span> necesitás, fechas, horarios, destino como
                        también podrás adjuntar fotos o videos.</p>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="how-works" id="how-works">
                <h2>¿ Cómo funciona ?</h2>
                <div class="grid-spaceBetween">
                    <div class="col-4_sm-12_xs-12 how-works-wrapper">
                        <img src="assets/register-icon.png" alt="register-icon" class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4>Te registras como Pooler</h4>
                            <p>Completando el formulario, se te dara un nombre de usuario</p>
                        </div>
                    </div>
                    <div class="col-4_sm-12_xs-12 how-works-wrapper">
                        <img src="assets/form-icon.png" alt="form-icon" class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4>Publicas tu
                                Pool</h4>
                            <p>Ingresando título, descripcion, categoria y algunos datos mas, podras publicar tu Pool.</p>
                        </div>
                    </div>
                    <div class="col-4_sm-12_xs-12 how-works-wrapper">
                        <img src="assets/gallery-icon.png" alt="gallery-icon" class="img-responsive center-block">
                        <div class="how-works-item">
                            <h4>Navega entre los Pools</h4>
                            <p>Podras filtrar por ubicacion, actividad para unirte a distintos Pools.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="col-10 gallery" data-push-left="off-1">
                <h2>Descubrí otros Pools</h2>
                <div class="grid-spaceBetween gallery-wrapper">
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-1.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Partido de futbol</h3>
                            <p class="desc-text">Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user">
                                <span>@colomfernando</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-2.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Partido de futbol</h3>
                            <p class="desc-text">Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user">
                                <span>@beatrizmalfas</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-3.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Partido de futbol</h3>
                            <p class="desc-text">Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user">
                                <span>@micaelarodriguez</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-4.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Partido de futbol</h3>
                            <p class="desc-text">Necesito 10 personas para jugar un campeonato los dias Viernes a las 20 horas</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>17/11/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Deporte</span>
                            </div>
                            <div class="user">
                                <span>@socorinCecilia</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-5.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Escalar</h3>
                            <p class="desc-text">Busco grupo de personas que le apasione escalar y formar un grupo de entrenamiento. El objetivo
                            es subir al Aconcagua</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>28/12/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Paisaje</span>
                            </div>
                            <div class="user">
                                <span>@Stolbjack</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-6.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Socio para StartUp</h3>
                            <p class="desc-text">Estoy armando una StartUp dedicada a organizar eventos.</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>01/03/2018</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Trabajo</span>
                            </div>
                            <div class="user">
                                <span>@salazarmatias</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-7.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Escapada a Tandil</h3>
                            <p class="desc-text">Busco 4 personas para ir un finde largo a tandil, compartir gastos de hotel, auto, etc</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>23/01/2018</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Turismo</span>
                            </div>
                            <div class="user">
                                <span>@Moschigerardo</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
                    <div class="col-3_md-4_sm-6_xs-10 gallery-item" data-push-left="off_xs-1">
                        <div class="item-wrapper">
                            <div class="img-wrapper">
                                <img src="assets/gallery%20asset/gallery-8.jpg" alt="gallery-img">
                            </div>
                        <div class="descr-wrapper">
                            <h3 class="title">Fiesta de fin de año</h3>
                            <p class="desc-text">La idea es juntar dinero entre todos para alquilar un espacio, DJ,
                                bebidas y comidas y pasar fin de año</p>
                            <div class="date-wrapper">
                                <span>Fecha actividad:</span>
                                <span>28/12/2017</span>
                            </div>
                            <div class="category-wrapper">
                                <span>Categoria:</span>
                                <span>Evento</span>
                            </div>
                            <div class="user">
                                <span>@VelascoJuan</span>
                            </div>
                            <button class="btn-more"><a href="">+</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="grid-12 faq" id="faq">
            <h2>Preguntas Frecuentes</h2>
            <div class="grid">
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Es gratis crear una cuenta y sumarse a proyectos?</h1>
                        <p>Si, efectivamente es gratuito la creación de una cuenta, como así también crear ysumarse a proyectos de otros
                            integrantes.</p>
                    </div>
                </div>
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Cómo puedo encontrar proyectos de mi interés?</h1>
                        <p>Desde el buscador, podrás ingresar el país y cuidad para filtrar los distintos proyectos. Ademas estarán
                            separados por categorías de acuerdo a cual asigna un Pooler en el momento de crearlo.</p>
                    </div>
                </div>
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Cómo funciona el sistema de puntajes?</h1>
                        <p>Cada Pooler debe calificar al creador del proyecto de forma positiva, neutra o negativa y dejar un comentario.
                            Cada calificación positiva equivale un punto y negativa descuenta un punto.</p>
                    </div>
                </div>
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Cómo publicar una foto o video?</h1>
                        <ul>
                            <li>Pulsa el icono “Subir Foto/Video”.</li>
                            <li>La foto puede ser de tu biblioteca o puedes tomar una foto.</li>
                            <li>Pulsa el icono “Adjuntar a tu proyecto”.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Requisitos para subir una foto?</h1>
                        <ul>
                            <li>Las fotos pueden ser de hasta 5 MB de tamaño.</li>
                            <li>Formatos admitidos para fotos: JPEG, GIF, PNG</li>
                        </ul>
                    </div>
                </div>
                <div class="col-6_xs-12">
                    <div class="faq-wrapper">
                        <h1>¿Requisitos para subir un video?</h1>
                        <ul>
                            <li>Los videos no deben superar los 30 segundos de duración.</li>
                            <li>Formatos admitidos para videos: AVI, MOV,MPEG</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <footer>
        <div class="grid_12 footer">
            <div class="col-10" data-push-left="off-1">
                <h4 class="copyright">&#9400 2017 <span class="logo-color-principal">Pooler</span></h4>
            </div>
        </div>
    </footer>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
