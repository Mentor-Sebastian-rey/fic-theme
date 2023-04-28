<?php 
get_header();
?>
<main class="home">
    
    <section class="home__slider">
        <div class="home__slider--cont">
            <?php
            $sliders = get_field('slider');
            foreach($sliders as $slider):
                ?>
                <div class="home__slider--indv">
                    <div class="home__slider--indv__contenido">
                        <div>
                            <h1 style="color: #00b388;
    font-family: 'Gotham';
    font-weight: bold;
    line-height: 1em;
    margin: 0;
    padding: 0;
    text-transform: uppercase;"><?php echo $slider["titulo1"]; ?></h1>
                            <h2 style="color: #00266e;"><?php echo $slider["titulo2"]; ?></h2>
                        </div>
                    </div>
                    <div class="home__slider--indv__bg">
                        <img src="<?php echo $slider["imagen"]["url"]; ?>" alt="<?php echo $slider["titulo1"]; ?> <?php echo $slider["titulo2"]; ?>">
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </section>

    <section class="home__quehacemos">
        <?php
        $rsocial_titulo = get_field('rsocial_titulo');
        $rsocial_imagen = get_field('rsocial_imagen');
        $rsocial_contenido = get_field('rsocial_contenido');
        ?>
        <h2><?php echo $rsocial_titulo; ?></h2>
        <div class="container-fluid">
            <div class="container g-0">
                <div class="row g-0 align-items-center">
					 <div class="col-12 col-md-6">
                        <div class="home__quehacemos--contenido">
                            <?php echo $rsocial_contenido; ?>
                        </div>
                    </div>
					<!-- cambiamos el posicionamiento  -->
                    <div class="col-12 col-md-6">
                        <div>
                            <img src="<?php echo $rsocial_imagen["url"]; ?>" alt="<?php echo $rsocial_imagen["alt"]; ?>">
                        </div>
                    </div>
					
					
                   
                </div>
            </div>
        </div>
    </section>

    <?php
    $ods_titulo = get_field('ods_titulo');
    $ods_descripcion = get_field('ods_descripcion');
    $ods_imagenes = get_field('ods_imagenes');
    ?>
    <section class="home__objetivos">
        <h2><?php echo $ods_titulo; ?></h2>
        <div class="container-fluid">
            <div class="container g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <p class="primario">
                            <?php echo $ods_descripcion; ?>
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="home__objetivos--icons">
                            <?php
                            foreach($ods_imagenes as $imagen):
                                ?>
                                <div class="home__objetivos--icon">
                                    <img src="<?php echo $imagen["imagen"]["url"]; ?>" alt="<?php echo $imagen["descripcion"]; ?>">
                                </div>
                                <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    $gdi_titulo = get_field('gdi_titulo');
    $gdi_imagenes = get_field('gdi_imagenes');
    ?>
    <section class="home__ginteres">
        <h2><?php echo $gdi_titulo; ?></h2>
        <div class="container-fluid">
            <div class="container g-0">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="home__ginteres--icons">
                            <?php
                            foreach($gdi_imagenes as $imagen):
                                ?>
                                <div class="home__ginteres--icon">
                                    <img src="<?php echo $imagen["imagen"]["url"]; ?>" alt="<?php echo $imagen["descripcion"]; ?>">
                                </div>
                                <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home__programas">
        <?php
        $ps_titulo = get_field('ps_titulo');
        ?>
        <h2><?php echo $ps_titulo; ?></h2>
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12">
                    <div class="home__programas--pestanas">
                        <div class="home__programas--pestanas__btns">
                            <ul>
                                <li>
                                    <a href="#" class="selected">Regale una vida</a>
                                </li>
                                <li>
                                    <a href="#">Pedagogía hospitalaria</a>
                                </li>
                                <li>
                                    <a href="#">Comer con alegría</a>
                                </li>
                                <li>
                                    <a href="#">Generación más limpia</a>
                                </li>
                            </ul>
                        </div>
                        <div class="home__programas--pestanas__tabs">
                            <div class="home__programas--pestanas__tab mostrar"><!-- Regale una vida -->
                                <?php
                                $ruv_imagen = get_field('ruv_imagen');
                                $ruv_descripcion = get_field('ruv_descripcion');
                                $ruv_enlace = get_field('ruv_enlace');
                                $ruv_enlace_label = get_field('ruv_enlace_label');
                                $ruv_descripcion_whatsapp = get_field('ruv_descripcion_whatsapp');
                                $ruv_enlace_contacto = get_field('ruv_enlace_contacto');
                                $ruv_enlace_whatsapp = get_field('ruv_enlace_whatsapp');
                                ?>
                                <div class="container g-0 mb-4">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-12 col-md-5 mb-3 mb-md-0 pe-0 pe-md-3">
                                            <p class="primario">
                                                <?php echo $ruv_descripcion; ?>
                                            </p>
                                            <p class="m-0">
                                                <a href="<?php echo $ruv_enlace; ?>
                                                " class="btn btn-accion1">
                                                <?php echo $ruv_enlace_label; ?>
                                                </a>
                                            </p>
                                            <br></br>
                                            <p class="primario">
                                                <?php echo $ruv_descripcion_whatsapp; ?>
                                            </p>
                                            <p class="m-0">
                                                <a href="<?php echo $ruv_enlace_contacto; ?>
                                                " class="btn btn-accion1">
                                                <?php echo $ruv_enlace_whatsapp; ?>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <img src="<?php echo $ruv_imagen["url"]; ?>" alt="<?php echo $ruv_imagen["alt"]; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="home__programas--pestanas__tab"><!-- Pedagogía hospitalaria -->
                                <?php
                                    $ph_bloque1_titulo = get_field('ph_bloque1_titulo');
                                    $ph_bloque1_descripcion = get_field('ph_bloque1_descripcion');
                                    $ruv_pedago_enlace_whats = get_field('ruv_pedago_enlace_whats');
                                    $ruv_enlace_contacto_pedago = get_field('ruv_enlace_contacto_pedago');
                                    $ph_bloque1_foto = get_field('ph_bloque1_foto');
                                    $ph_bloque2_descripcion = get_field('ph_bloque2_descripcion');
                                    $ph_bloque2_imagen = get_field('ph_bloque2_imagen');
                                    $ph_bloque3_descripcion = get_field('ph_bloque3_descripcion');
                                    $ph_bloque3_imagen = get_field('ph_bloque3_imagen');
                                ?>
                                <div class="container mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-5">
                                            <h4 class="text-start"><?php echo $ph_bloque1_titulo; ?></h4>
                                            <p class="primario">
                                                <?php echo $ph_bloque1_descripcion; ?>
                                            </p>

                                            <p class="m-0">
                                                <a href="<?php echo $ruv_pedago_enlace_whats; ?>
                                                " class="btn btn-accion1">
                                                <?php echo $ruv_enlace_contacto_pedago; ?>
                                                </a>

                                        </div>
                                        <div class="col-12 col-md-7">
                                            <img src="<?php echo $ph_bloque1_foto["url"]; ?>" alt="<?php echo $ph_bloque1_foto["alt"]; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid g-0 mb-4">
                                    <div class="row align-items-center g-0">
                                        <div class="col-12 col-md-7 mb-4 mb-md-0">
                                            <img src="<?php echo $ph_bloque2_imagen["url"]; ?>" alt="<?php echo $ph_bloque2_imagen["alt"]; ?>" class="rounded w-100">
                                        </div>
                                        <div class="col-12 col-md-5 margin-left-2p-inright">
                                            <div class="position-relative">
                                                <div class="home__programas--pestana__burbuja-der">
                                                    <p>
                                                        <?php echo nl2br($ph_bloque2_descripcion); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-5">
                                            <div class="primario">
                                                <?php echo $ph_bloque3_descripcion; ?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <img src="<?php echo $ph_bloque3_imagen["url"]; ?>" alt="<?php echo $ph_bloque3_imagen["alt"]; ?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="home__programas--pestanas__tab"><!-- Comer con alegría -->
                                <?php
                                $bloque_titulo_comer = get_field('bloque_titulo_comer');
                                $cca_bloque1_descripcion = get_field('cca_bloque1_descripcion');
                                $ruv_enlace_contacto_comer = get_field('ruv_enlace_contacto_comer');
                                $ruv_comer_enlace_whats = get_field('ruv_comer_enlace_whats');
                                $cca_bloque1_imagen = get_field('cca_bloque1_imagen');
                                $cca_bloque2_descripcion = get_field('cca_bloque2_descripcion');
                                $cca_bloque2_imagen = get_field('cca_bloque2_imagen');
                                $cca_video = get_field('cca_video');
                                ?>
                                <div class="container mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-5 primario">

                                            <h4 class="text-start"><?php echo  $bloque_titulo_comer; ?></h4>

                                            <p>
                                                <?php echo nl2br($cca_bloque1_descripcion); ?>
                                            </p>

                                            <p class="m-0">
                                                <a href="<?php echo $ruv_enlace_contacto_comer; ?>
                                                " class="btn btn-accion1">
                                                <?php echo $ruv_comer_enlace_whats; ?>
                                                </a>

                                        </div>
                                        <div class="col-12 col-md-7">
                                            <img src="<?php echo $cca_bloque1_imagen["url"]; ?>" alt="<?php echo $cca_bloque1_imagen["alt"]; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid g-0 mb-4">
                                    <div class="row align-items-center g-0">
                                        <div class="col-12 col-md-7 mb-4 mb-md-0">
                                            <img src="<?php echo $cca_bloque2_imagen["url"]; ?>" alt="<?php echo $cca_bloque2_imagen["alt"]; ?>" class="rounded w-100">
                                        </div>
                                        <div class="col-12 col-md-5 margin-left-2p-inright">
                                            <div class="position-relative">
                                                <div class="home__programas--pestana__burbuja-der">
                                                    <p>
                                                        <?php echo nl2br($cca_bloque2_descripcion); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="video_youtube">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $cca_video; ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="home__programas--pestanas__tab"><!-- Generación más limpia -->
                                <?php
                                    $gml_bloque1_titulo = get_field('gml_bloque1_titulo');
                                    $gml_bloque1_descripcion = get_field('gml_bloque1_descripcion');
                                    $gml_bloque1_imagen = get_field('gml_bloque1_imagen');
                                    $gml_bloque2_descripcion = get_field('gml_bloque2_descripcion');
                                    $gml_bloque2_foto = get_field('gml_bloque2_foto');
                                    $gml_enlace_whats = get_field('gml_enlace_whats');
                                    $gml_enlace_contacto = get_field('gml_enlace_contacto');
                                ?>
                                <div class="container mb-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-5">
                                            <h4 class="text-start"><?php echo $gml_bloque1_titulo; ?></h4>
                                            <p class="primario">
                                                <?php echo $gml_bloque1_descripcion; ?>
                                            </p>

                                            <p class="m-0">
                                                <a href="<?php echo $gml_enlace_contacto; ?>
                                                " class="btn btn-accion1">
                                                <?php echo $gml_enlace_whats; ?>
                                                </a>

                                        </div>
                                        <div class="col-12 col-md-7">
                                            <img src="<?php echo $gml_bloque1_imagen["url"]; ?>" alt="<?php echo $gml_bloque1_imagen["alt"]; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid g-0 mb-4">
                                    <div class="row align-items-center g-0">
                                        <div class="col-12 col-md-7 mb-4 mb-md-0">
                                            <img src="<?php echo $gml_bloque2_foto["url"]; ?>" alt="<?php echo $gml_bloque2_foto["alt"]; ?>" class="rounded w-100">
                                        </div>
                                        <div class="col-12 col-md-5 margin-left-2p-inright">
                                            <div class="position-relative">
                                                <div class="home__programas--pestana__burbuja-der">
                                                    <p>
                                                        <?php echo nl2br($gml_bloque2_descripcion); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <?php
                            $is_titulo = get_field('is_titulo');
                            $is_columna1 = get_field('is_columna1');
                            $is_columna2 = get_field('is_columna2');
                            $mdm_titulo = get_field('mdm_titulo');
                            $mdm_imagen = get_field('mdm_imagen');
                            $mdm_descripcion = get_field('mdm_descripcion');
                        ?>
                        <div class="container-fluid py-3 py-md-5 text-white bg-primario">
                            <div class="container g-0 p-3">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <h3 class="text-white"><?php echo $is_titulo; ?></h3>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>
                                            <?php echo nl2br($is_columna1); ?>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>
                                            <?php echo nl2br($is_columna2); ?>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <h3 class="text-white"><?php echo $mdm_titulo; ?></h3>
                                    </div>
                                    <div class="col-12">
                                        <img src="<?php echo $mdm_imagen["url"]; ?>" alt="<?php echo $mdm_imagen["alt"]; ?>">
                                    </div>
                                    <div class="col-12 gy-2">
                                        <p>
                                            <?php echo nl2br($mdm_descripcion); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="container g-0 py-4">
                            <?php
                                $informes_descripcion = get_field('informes_descripcion');
                                $informes_enlace = get_field('informes_enlace');
                                $informes_enlace_label = get_field('informes_enlace_label');
                            ?>
                            <div class="row g-0">
                                <div class="col-12 py-3 rounded  bg-primario">
                                    <div class="p-4 informes text-white">
											     <div class="row">
  													<div class="col-12 col-md-2 informe-img mb-3 mb-md-0  justify-content-center d-flex ">
   														 <img src="https://qa.lacardio.org/wp-content/uploads/2023/04/sostenibilidad-img.png" alt="imagen de informe"  >
  													</div>
  													<div class="col-12 col-md-10">
													  <p class="p-informe"><?php echo $informes_descripcion; ?></p>
													  <div class="d-flex justify-content-md-start justify-content-center ">

    													<a href="<?php echo $informes_enlace; ?>" class="btn btn-descargar2"><?php echo $informes_enlace_label; ?></a>
 													 </div>
												</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                            $v_titulo = get_field('v_titulo');
                            $v_introduccion = get_field('v_introduccion');

                            $v_bloque1_titulo = get_field('v_bloque1_titulo');
                            $v_bloque1_descripcion = get_field('v_bloque1_descripcion');
                            $v_bloque1_imagen = get_field('v_bloque1_imagen');

                            $v_bloque2_descripcion = get_field('v_bloque2_descripcion');
                            $v_bloque2_imagen = get_field('v_bloque2_imagen');

                            $v_bloque3_descripcion = get_field('v_bloque3_descripcion');
                            $v_bloque3_imagen = get_field('v_bloque3_imagen');

                            $v_bloque4_descripcion = get_field('v_bloque4_descripcion');
                            $v_bloque4_imagen = get_field('v_bloque4_imagen');

                            $v_bloque5_descripcion = get_field('v_bloque5_descripcion');
                            $v_bloque5_imagen = get_field('v_bloque5_imagen');

                            $v_bloque6_descripcion = get_field('v_bloque6_descripcion');
                            $v_bloque6_imagen = get_field('v_bloque6_imagen');

                            $v_texto_final = get_field('v_texto_final');
                        ?>
                        <div class="container g-0 mb-4 p-3">
                            <div class="row g-0">
                                <div class="col-12 primario">
                                    <h2><?php echo $v_titulo; ?></h2>
                                    <p>
                                        <?php echo $v_introduccion; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
    
                        <div class="container-fluid g-0 mb-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-5">
                                    <div class="position-relative">
                                        <p class="text-center primario2">
                                            <strong><?php echo $v_bloque1_titulo; ?></strong>
                                        </p>
                                        <div class="home__programas--pestana__burbuja-izq mb-4 mb-md-0">
                                            <?php echo $v_bloque1_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 margin-left-2p">
                                    <img src="<?php echo $v_bloque1_imagen["url"]; ?>" alt="<?php echo $v_bloque1_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                            </div>
                        </div>
    
                        <div class="container-fluid g-0 mb-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo $v_bloque2_imagen["url"]; ?>" alt="<?php echo $v_bloque2_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja p-5 pb-0 pb-md-5 primario">
                                            <?php echo $v_bloque2_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="container-fluid g-0 mb-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-5">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja p-5 pt-0 pt-md-5 primario">
                                            <?php echo $v_bloque3_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo $v_bloque3_imagen["url"]; ?>" alt="<?php echo $v_bloque3_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                            </div>
                        </div>
    
                        <div class="container-fluid g-0 mb-0 mb-md-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-7 mb-4 mb-md-0">
                                    <img src="<?php echo $v_bloque4_imagen["url"]; ?>" alt="<?php echo $v_bloque4_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                                <div class="col-12 col-md-5 margin-left-2p-inright">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja-der">
                                            <?php echo $v_bloque4_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="container-fluid g-0 mb-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-5">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja p-5 primario">
                                            <?php echo $v_bloque5_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo $v_bloque5_imagen["url"]; ?>" alt="<?php echo $v_bloque5_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                            </div>
                        </div>
    
    
                        <div class="container-fluid g-0 mb-0 mb-md-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo $v_bloque6_imagen["url"]; ?>" alt="<?php echo $v_bloque6_imagen["alt"]; ?>" class="rounded w-100">
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja p-5 primario">
                                            <?php echo $v_bloque6_descripcion; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="container g-0 mb-4">
                            <div class="row align-items-center g-0">
                                <div class="col-12 col-md-12">
                                    <div class="position-relative">
                                        <div class="home__programas--pestana__burbuja p-3 primario">
                                            <p>
                                                <?php echo $v_texto_final; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<?php
get_footer();
?>