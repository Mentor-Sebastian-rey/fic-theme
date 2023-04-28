<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description') ?>">
    
    <!-- Fuentes -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets/fuentes/gotham/stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.3.0/main.min.css'><link rel="stylesheet" href="./style.css">


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    
    <div class="fci">
        <div class="fci__header">
            <header>
                <div class="container-fluid fci__header--top">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-10 mb-3 mb-lg-0 fci__header--top__info">
                                <ul>
                                    <li>
                                        <i class="fas fa-phone-volume"></i><span>Contáctanos: 667 2720</span>
                                    </li>
                                    <li>
                                        <i class="far fa-map-marker-alt"></i><span>Encuéntranos: Calle 163a #13b-60</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-briefcase"></i><span>Trabaja con nosotros</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-top">Conócenos</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-2 fci__header--top__redes d-flex align-items-center justify-content-center justify-content-lg-end">
                                <?php echo get_template_part('template-parts/content', 'social'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container fci__header--bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="fci__header--bottom__barra">

                                <div class="logo_fundacion">
									<a href="<?php echo get_home_url(); ?>"> <img src="/wp-content/uploads/2023/03/logo-50-fundacion-azul-2.png" alt="Fundación Cardioinfantil"> </a>  
                                </div>
                                
                                <div class="menu-principal">
                                    <?php
                                    $menuToUse = 'main_menu';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => 'main-menu-cont',
                                            'menu_class'            => 'main-menu',
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                                </div>

                                <div class="menu-responsive d-flex d-md-none order-4">
                                    <div class="menu_celulares w-100">
                                        <nav class="navbar navbar-light justify-content-end">
                                            <button class="navbar-toggler bg-light abrir_menu_cell" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                        </nav>
                                    </div>
                                </div>
            
                                <div class="logo_cardio">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/general/logo_cardio.jpg" alt="laCardio">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="menu_responsive_cont d-flex d-md-none">
                    <a href="#" class="cerrar_menu_cell"><i class="fas fa-times"></i></a>
                    <?php
                    if (has_nav_menu($menuToUse)) {
                        wp_nav_menu(array(
                            'theme_location' => $menuToUse,
                            'container' => 'nav',
                            'container_class' => 'main-menu-mb-container',
                            'menu_class'      => 'main-menu-mb'
                        ));
                    }
                    ?>
                </div>
            </header>
        </div>
        <div class="fci__cuerpo">