            <footer class="footer">
                <div class="container g-0">
                    <div class="row g-0">
                        <div class="col-12">
                            <section class="footer_up">
                                <div class="logo">
									<a href="<?php echo get_home_url(); ?>"> <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/general/logo_white.png" alt="Fundación Cardioinfantil"> </a>    
                                </div>
                                <div class="redes">
                                    <?php echo get_template_part('template-parts/content', 'social'); ?>
                                </div>
                            </section>
                            <section class="footer_down">

                                <div class="footer_down--menu">
                                    <h4>Responsabilidad Social</h4>
                                    <?php
                                    $menuToUse = 'menu_footer_medicos';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => $menuToUse,
                                            'menu_class'            => $menuToUse,
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                                </div>
                                <div class="footer_down--menu">
                                    <h4>Nuestra Causa</h4>
                                    <?php
                                    $menuToUse = 'menu_footer_estudiantes';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => $menuToUse,
                                            'menu_class'            => $menuToUse,
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                                </div>
                                <div class="footer_down--menu">
                                    <h4>Cómo donar​</h4>
                                    <?php
                                    $menuToUse = 'menu_footer_investigadores';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => $menuToUse,
                                            'menu_class'            => $menuToUse,
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                                </div>
                                <div class="footer_down--menu">
                                    <h4>Tienda Cardio</h4>
                                    <?php
                                    $menuToUse = 'menu_footer_internacionales';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => $menuToUse,
                                            'menu_class'            => $menuToUse,
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                                </div>
                            </section>
                            
                        </div>
                    </div>
                </div>
                <section class="footer_bar ">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 mb-4 mb-md-0 text-center text-md-start">
                                <p>2022. Fundación Cardioinfantil</p>
                            </div>
                            <div class="col-12 col-md-8 d-flex justify-content-center justify-content-md-end">
                                <?php
                                    $menuToUse = 'menu_footer_barra';
                                    if (has_nav_menu($menuToUse)) {
                                        wp_nav_menu(array(
                                            'theme_location'        => $menuToUse,
                                            'container'             => 'nav',
                                            'container_class'       => $menuToUse,
                                            'menu_class'            => $menuToUse,
                                            'depth'                 => 0,
                                        ));
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </section>
            </footer>

        </div><!-- cuerpo -->
    </div><!-- aplus_contenedor -->

<div class="btn_donar">
    <a href="#">Donar</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.4.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-general.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>


<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.2.0/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@4.2.0/main.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@4.2.0/main.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/uuid@8.3.2/dist/umd/uuidv4.min.js'></script><script  src="./script.js"></script>


<?php wp_footer(); ?>

</body>
</html>