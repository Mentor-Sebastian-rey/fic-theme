<?php get_header(); ?>
<main class="home boxedContent">
    <div class="internaPpal">
        <div class="sliderhome">

            <section class="slider_home_ppal">
                <?php echo do_shortcode('[rev_slider alias="slider-home"][/rev_slider]'); ?>
            </section>
        </div>

        <section class="container-fluid home_servicios fondo1 py-5">
            <div class="container">
                <div class="col-12">
                    <div class="home_servicios_int text-center">
                        <h2>Conoce nuestros <strong>servicios</strong></h2>
                        <p><a href="#">Ver todo <i class="fas fa-chevron-right"></i></a></p>
                        <div class="home_servicios_carrusel">
                            <div class="home-carousel1">
                                <?php
                                for ($i = 0; $i <= 3; $i++) :
                                ?>
                                    <a href="#" class="h-carou-indv">
                                        <div class="h-carou-indv-cont">
                                            <div class="h-carou-indv-img">
                                                <img src="/wp-content/themes/bi/assets/img/servicios/servicios_1.jpg" alt="Servicios 1">
                                                <div class="h-carou-indv-shadow"></div>
                                            </div>
                                            <h3>Rostro</h3>
                                        </div>
                                    </a>
                                    <a href="#" class="h-carou-indv">
                                        <div class="h-carou-indv-cont">
                                            <div class="h-carou-indv-img">
                                                <img src="/wp-content/themes/bi/assets/img/servicios/servicios_2.jpg" alt="Servicios 2">
                                                <div class="h-carou-indv-shadow"></div>
                                            </div>
                                            <h3>
                                                Cuerpo
                                            </h3>
                                        </div>
                                    </a>
                                    <a href="#" class="h-carou-indv">
                                        <div class="h-carou-indv-cont">
                                            <div class="h-carou-indv-img">
                                                <img src="/wp-content/themes/bi/assets/img/servicios/servicios_3.jpg" alt="Servicios 3">
                                                <div class="h-carou-indv-shadow"></div>
                                            </div>
                                            <h3>
                                                Rejuvenecimiento
                                            </h3>
                                        </div>
                                    </a>
                                    <a href="#" class="h-carou-indv">
                                        <div class="h-carou-indv-cont">
                                            <div class="h-carou-indv-img">
                                                <img src="/wp-content/themes/bi/assets/img/servicios/servicios_4.jpg" alt="Servicios 4">
                                                <div class="h-carou-indv-shadow"></div>
                                            </div>
                                            <h3>
                                                Senos
                                            </h3>
                                        </div>
                                    </a>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <?php get_template_part('template-parts/content', 'bi-logo'); ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid home_especialistas mw-1600 py-5 fondo2">
            <div class="row">
                <div class="col-3">
                    <div class="home_espec_texto py-5 px-4">
                        <h2>Conoce a nuestros <strong>especialistas</strong></h2>
                        <a href="#">Ver todos <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-3">
                    <a href="#" class="home_espec_indv">
                        <div class="hesp_foto">
                            <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_1.jpg" alt="Especialista 1">
                        </div>
                        <div class="hesp_descrp">
                            <h3>Carla <strong>Díaz</strong></h3>
                            <p>Nutricionista</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#" class="home_espec_indv">
                        <div class="hesp_foto">
                            <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_2.jpg" alt="Especialista 1">
                        </div>
                        <div class="hesp_descrp">
                            <h3>Fernando <strong>Morales</strong></h3>
                            <p>Cirujano Plástico</p>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <a href="#" class="home_espec_indv">
                        <div class="hesp_foto">
                            <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_3.jpg" alt="Especialista 1">
                        </div>
                        <div class="hesp_descrp">
                            <h3>Ana María <strong>López</strong></h3>
                            <p>Cirujana Reconstructiva</p>
                        </div>
                    </a>

                </div>
            </div>
        </section>

        <section class="container-fluid fondo3 home_cientificos py-5 pb-100px">
            <div class="container position-relative">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="text-center">Conoce nuestros <strong class="d-block">Directores científicos</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="tarjeta">
                            <div class="foto">
                                <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_1.jpg" alt="Especialista 1">
                            </div>
                            <div class="contenido">
                                <h3>Carla <strong>Díaz</strong></h3>
                                <p>Nutricionista</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="tarjeta">
                            <div class="foto">
                                <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_2.jpg" alt="Especialista 1">
                            </div>
                            <div class="contenido">
                                <h3>Fernando <strong>Morales</strong></h3>
                                <p>Cirujano Plástico</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="tarjeta">
                            <div class="foto">
                                <img src="/wp-content/themes/bi/assets/img/home_especialistas/especialista_3.jpg" alt="Especialista 1">
                            </div>
                            <div class="contenido">
                                <h3>Ana María <strong>López</strong></h3>
                                <p>Cirujana Reconstructiva</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ubi-logo1">
                    <img src="/wp-content/themes/bi/assets/img/general/libelula_logo.png" alt="Clínica Integral de Cirugía Estética & Bienestar">
                </div>
            </div>
        </section>

        <section class="container-fluid fondo4 py-70px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider_home_instalaciones">
                            <div class="carousel-instalaciones shi_contenedor mostrar">
                                <div class="slid_h_insta_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/home_instalaciones/instalaciones_1.jpeg" alt="Instalaciones 1">
                                        </div>
                                        <div class="_contenido">
                                            <h3>Conoce las instalaciones</h3>
                                            <h4>Body Institute</h4>
                                            <p><a href="#">Agenda tu visita <i class="fas fa-chevron-right"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slid_h_insta_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/home_instalaciones/instalaciones_1.jpeg" alt="Instalaciones 1">
                                        </div>
                                        <div class="_contenido">
                                            <h3>Conoce las instalaciones</h3>
                                            <h4>Body Institute</h4>
                                            <p><a href="#">Agenda tu visita <i class="fas fa-chevron-right"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-instalaciones shi_contenedor">
                                <div class="slid_h_insta_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/home_instalaciones/instalaciones_2.jpeg" alt="Instalaciones 1">
                                        </div>
                                        <div class="_contenido">
                                            <h3>Conoce las instalaciones</h3>
                                            <h4>Body Institute</h4>
                                            <p><a href="#">Agenda tu visita <i class="fas fa-chevron-right"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slid_h_insta_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/home_instalaciones/instalaciones_2.jpeg" alt="Instalaciones 1">
                                        </div>
                                        <div class="_contenido">
                                            <h3>Conoce las instalaciones</h3>
                                            <h4>Body Institute</h4>
                                            <p><a href="#">Agenda tu visita <i class="fas fa-chevron-right"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btns_instalaciones_gal">
                                <ul>
                                    <li><a href="#" class="actuales elegida">Actuales</a></li>
                                    <li><a href="#" class="nuevas">Nuevas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid fondo3 home_clientes py-5">
            <div class="container">
                <div class="row">
                    <div class="col-4 hom-cli-titulo">
                        <h2>Conoce a nuestros <strong>clientes</strong></h2>
                        <p><a href="#">Ver todo <i class="fas fa-chevron-right"></i></a></p>
                        <div class="home-clientes-nav">
                            <ul>
                                <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="slider_clientes">
                            <?php
                            for ($i = 1; $i < 10; $i++) :
                            ?>
                                <a href="#" class="slide_cliente_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/clientes/cliente_1.jpeg" alt="Clientes 1">
                                        </div>
                                        <div class="_play">
                                            <img src="/wp-content/themes/bi/assets/img/general/video_play.png" alt="Play al video">
                                        </div>
                                        <div class="_nombre">
                                            <h3>Carolina <strong>Giraldo</strong></h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="slide_cliente_indv">
                                    <div class="_int">
                                        <div class="_bg">
                                            <img src="/wp-content/themes/bi/assets/img/clientes/cliente_2.jpeg" alt="Clientes 2">
                                        </div>
                                        <div class="_play">
                                            <img src="/wp-content/themes/bi/assets/img/general/video_play.png" alt="Play al video">
                                        </div>
                                        <div class="_nombre">
                                            <h3>Daniela <strong>Castro</strong></h3>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            endfor;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid home_resultados py-5">
            <div class="container position-relative">
                <div class="row cabecera">
                    <div class="col-6">
                        <h2>Conoce nuestros <strong>resultados</strong></h2>
                    </div>
                    <div class="col-6 text-right">
                        <p>
                            <a href="#">Ver Todo <i class="fas fa-chevron-right"></i></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="home_resultados_img">
                            <img src="/wp-content/themes/bi/assets/img/general/resultados.jpeg" alt="Nuestros resultados">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid fondo5 home_blog py-5 mb-5">
            <?php get_template_part('template-parts/content', 'blog-entradas'); ?>
        </section>

    </div>
</main>
<?php get_footer(); ?>