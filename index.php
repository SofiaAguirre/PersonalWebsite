
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sofía Aguirre - Software Developer</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="imagenes/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

</head>

<body>
    <header class="header">

        <div class="contenedor-menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#" style="color: white;">
                    <img src="imagenes/idea.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
                    Sofía Aguirre</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#sobre-mi">Sobre mi<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Conocimientos">Conocimientos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Mis-Trabajos">Mis trabajos</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <div class="contenedor">
            <div class="contenedor-titulo">
                <h1>Sofía Aguirre</h1>
                <h2>Software Developer</h2>
                <a href="#Mis-Trabajos">VER MIS TRABAJOS</a>
            </div>
        </div>

    </header>
    <main>
        <section id="sobre-mi">
            <h3>Sobre mi</h3>
            <div class="contenedor">
                <div class="row">
                    <div class="col-lg-5">
                        <img class="imagen-computadora" src="imagenes/imagen-computadora2.jpg" height="600px"
                            width="520px" alt="imagen-computadora">
                    </div>
                    <div class="col-lg-5">
                        <p class="texto">
                            Mi nombre es Sofía Aguirre, actualmente soy estudiante en "Analísis de
                            Sistemas y Redes". Desde muy chica me dedico a innovar y diseñar en mis tiempos libres.
                        </p>
                        <p class="texto">Me encanta aprender nuevas tecnologías y mi objetivo personal es
                            crecer profesionalmente en éste rubro. Podés ponerte en contacto conmigo a través de
                            Facebook,
                            LinkedIn o completando el formulario de contacto que se encuentra al final de mi sitio web.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="Conocimientos">
            <h3>Conocimientos</h3>
            <div class="contenedor">

                <div class="row servicio">

                    <div class="col-lg-3">
                        <div class="logoo">
                            <img src="imagenes/website.png" id="logo-conocimientos" height="50" width="50"
                                alt="website-logo">
                        </div>
                        <div class="celeste">
                            <h4>Web Development</h4>
                            <p class="texto-conocimientos"> <b> Html5, Css: </b><br> -VSCode <br> -Bootstrap4 <br>
                                -jQuery <br> -Wordpress <br> <b>Stack Mern:</b> <br> -Javascript, JSON, Nodejs <br>
                                -MongoDB <br> -Express <br> -React </p>
                            <img class="waves" src="imagenes/waves.png">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="logoo">
                            <img src="imagenes/java.png" id="logo-conocimientos" height="50" width="50" alt="java-logo">
                        </div>
                        <div class="violeta">
                            <h4>JAVA</h4>
                            <p class="texto-conocimientos"> -Spring <br> -Hibernate </p>
                            <img class="waves" src="imagenes/waves.png">
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="logoo">
                            <img src="imagenes/linux.png" id="logo-conocimientos" height="50" width="50"
                                alt="freeware-logo">
                        </div>
                        <div class="celeste">
                            <h4>Free Software</h4>
                            <p class="texto-conocimientos"> Largos años de conocimiento en distintas distribuciones
                                GNU-Linux, uso personal y laboral.</p>
                            <img class="waves" src="imagenes/waves.png">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="Mis-Trabajos">
            <h3> Mis Trabajos </h3>
            <div class="contenedor">
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="#" target="_blank"><img src="imagenes/Macbook2.png"></a></div>
                    <div class="item"><a href="#" target="_blank"><img src="imagenes/Macbook1.png"></a></div>
                    <div class="item"><a href="#" target="_blank"><img src="imagenes/Macbook3.png"></a> </div>
                    <div class="item"><a href="#" target="_blank"><img src="imagenes/Macbook1.png"></a></div>

                </div>
            </div>
        </section>
        <section id="contacto">
            <?php
                if(@$_GET['i']=='ok') {  ?>
                <h3 class="contacto-rsp">La consulta se envio correctamente. Nos contactaremos a la brevedad.</h3>

            <?php
            } else{
            ?>
            <h3>Contacto</h3>
            <div class="contenedor">
                <form action="envio-formulario.php" method="post" enctype="multipart/form-data">
                    <input type="text" placeholder="Nombre" name="nombre" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                    <input type="submit" value="ENVIAR MENSAJE">
                </form>
             <?php } ?>
                <div class="contacto-info">
                    <div class="mail"><img src="imagenes/email.png" alt="email" height="35" width="35">
                        sofiaaguirre1@hotmail.com</div>
                    <div class="wsp"><img src="imagenes/whatsapp.png" alt="whatsapp" height="35" width="35"> 11-31477330
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="owl/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                scroll = $(window).scrollTop();
                if (scroll > 100) {
                    $(".contenedor-menu").css({
                        "position": "fixed"
                    });
                    $(".contenedor-menu").css({
                        "width": "100%"
                    });
                    $(".contenedor-menu").css({
                        "top": "0"
                    });
                    $(".contenedor-menu").css({
                        "background": "black"
                    });
                    $(".contenedor-menu").css({
                        "z-index": "100"
                    });

                } else {
                    $(".contenedor-menu").css({
                        "position": "relative"
                    });
                    $(".contenedor-menu").css({
                        "background": "transparent"
                    });
                }
            })
        })
    </script>
    <footer>
        <div class="contenedor">
            <div class="redes">
                <a href="https://www.facebook.com/soofi.de.belgrano" target=”_blank”>
                    <img src="imagenes/facebook.png" alt="facebook" height="35" width="35">
                </a>
                <a href="https://github.com/SofiaAguirre" target=”_blank”>
                    <img src="imagenes/github.png" alt="github" height="35" width="35"></a>
                <a href="https://www.linkedin.com/in/sofia-aguirre-81bb80166/" target=”_blank”>
                    <img src="imagenes/linkedin.png" alt="linkedin" height="35" width="35">
                </a>
            </div>
            <div class="parrafo">
                <p> © 2019 Sofía Aguirre | Software Developer Argentina. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

</body>

</html>