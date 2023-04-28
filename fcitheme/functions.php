<?php
@ini_set('upload_max_size', '128M');
@ini_set('post_max_size', '128M');
@ini_set('max_execution_time', '300');

/**
 *  El functions de mi Theme
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage jwm 
 * @since 1.0.0
 * @version 1.0.0
 */

function convertirEnMoneda($numero)
{
  return "" . number_format($numero, 0, ',', '.');
}

if (!function_exists('scripts_iniciales')) :
    function scripts_iniciales()
    {
        $version = '1.1.0.3';
        // Archivos y librerías JS
        wp_register_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js', '', $version, true);
        // Scripts de JWM
        wp_register_script('jwm', get_template_directory_uri() . '/assets/js/scripts.min.js', '', $version, true);
        wp_register_script('fslightbox', get_template_directory_uri() . '/assets/js/fslightbox.js', '', $version, true);
        wp_register_script('masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', '', $version, true);

        wp_localize_script('script', 'wp_theme_ajax_vars', array(
            'ajax_url' => admin_url('admin-ajax.php')
        ));
        wp_enqueue_script('splide');
        wp_enqueue_script('jwm');
        wp_enqueue_script('fslightbox');
        wp_enqueue_script('masonry-js');

        // Creamos los estilos y los insertamos al documento
        wp_register_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', '', $version );
        wp_register_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', '', $version );
        wp_register_style( 'style-min', get_template_directory_uri() . '/assets/css/style.min.css', '', $version );
        wp_register_style( 'customizacion', get_template_directory_uri() . '/assets/css/customizacion.css', '', $version);
        	
        wp_enqueue_style( 'slick' );
        wp_enqueue_style( 'slick-theme' );
        wp_enqueue_style( 'style-min' );
        wp_enqueue_style( 'customizacion' );

    }
endif;
add_action('wp_enqueue_scripts', 'scripts_iniciales');

function defer_parsing_of_js($url)
{
    // if (is_admin()) return $url; //don't break WP Admin
    // if (false === strpos($url, '.js')) return $url;
    if (strpos($url, 'jquery.js')) return $url;
    if (strpos($url, 'jquery.min.js')) return $url;
    // return str_replace(' src', ' defer src', $url);
    return $url;
}
add_filter('script_loader_tag', 'defer_parsing_of_js', 10);

function dequeue_gutenberg_theme_css() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'dequeue_gutenberg_theme_css', 100 );

function jwm_setup()
{
    load_theme_textdomain('jwm', get_template_directory() . '/languages');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ));

    //https://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats',  array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat'
    ));

    //Permite que los themes y plugins administren el título, si se activa, no debe usarse wp_title()
    add_theme_support('title-tag');
    //Activar Feeds RSS
    add_theme_support('automatic-feed-links');
    //Ocultar Tags innecesarios del head
    //Versión de WordPress
    remove_action('wp_head', 'wp_generator');
    //Imprime sugerencias de recursos para los navegadores para precargar, pre-renderizar y pre-conectarse a sitios web
    remove_action('wp_head', 'wp_resource_hints', 2);
    //Muestre el enlace al punto final del servicio Really Simple Discovery
    remove_action('wp_head', 'rsd_link');
    //Muestre el enlace al archivo de manifiesto de Windows Live Writer
    remove_action('wp_head', 'wlwmanifest_link');
    //Inyecta rel = shortlink en el encabezado si se define un shortlink para la página actual.
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('after_setup_theme', 'jwm_setup');

// Agregar opciones de menu
function jwm_menus()
{   
    register_nav_menus(array(
        'main_menu' => __('Menú Principal', 'jwm'),
        'menu_footer_medicos' => __('Menú del footer Médicos', 'jwm'),
        'menu_footer_estudiantes' => __('Menú del footer Estudiantes', 'jwm'),
        'menu_footer_investigadores' => __('Menú del footer Investigadores', 'jwm'),
        'menu_footer_internacionales' => __('Menú del footer Pacientes Internacionales', 'jwm'),
        'menu_footer_caridad' => __('Menú del footer Caridad y Asistencia', 'jwm'),
        'menu_footer_barra' => __('Menú del footer barra blanca', 'jwm'),
        'accesos_rapidos' => __('Menú de accesos rápidos', 'jwm'),
        'top_menu' => __('Top Menú', 'jwm')
    ));

}
add_action('init', 'jwm_menus');



function redesSocialesDisponibles($funcion = 1)
{
    if($funcion == 1)
    {
        $redes_socials = array(
            'my_facebook_url' => 'Facebook URL',
            'my_twitter_url' => 'Twitter URL',
            'my_tripadvisor' => 'Tripadvisor URL',
            'my_instagram' => 'Instagram URL',
            'my_google_business' => 'Google Business URL',
            'my_youtube' => 'Youtube URL',
            'my_pinterest' => 'Pinterest URL',
            'my_linkedin' => 'Linkedin URL',
            'my_yelp' => 'Yelp URL',
            'my_whatsapp' => 'Whatsapp URL',
        );
    }

    if($funcion == 2)
    {
        $redes_socials = array(
            'my_facebook_url' => 'fab fa-facebook-f',
            'my_twitter_url' => 'fab fa-twitter',
            'my_tripadvisor' => 'fab fa-tripadvisor',
            'my_instagram' => 'fab fa-instagram',
            'my_google_business' => 'fab fa-google',
            'my_youtube' => 'fab fa-youtube',
            'my_pinterest' => 'fab fa-pinterest',
            'my_linkedin' => 'fab fa-linkedin',
            'my_yelp' => 'fab fa-yelp',
            'my_whatsapp' => 'fab fa-whatsapp',
        );
    }

    return $redes_socials;
}

function jw_customizar_template($wp_customize)
{
    $wp_customize->add_panel('jw_opciones_custom', array(
        'title' => __('JWM Theme', 'textdomain'),
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ));

    // 1. 
    // Campos de la cabezera (dirección, teléfono, etc)
    $wp_customize->add_section('jw_subheader_section', array(
        'title' => __('Opciones de cabecera', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 10,
        'capability' => 'edit_theme_options',
    ));

    // 2.
    // Section para Google Analytics
    $wp_customize->add_section('google_analytics_section', array(
        'title' => __('Google Analytics', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 30,
        'capability' => 'edit_theme_options',
    ));

    // 3. 
    // Section para Redes Sociales
    $wp_customize->add_section('social_section', array(
        'title' => __('Redes Sociales', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 100,
        'capability' => 'edit_theme_options',
    ));

    // 4. 
    // Section estilos en general
    $wp_customize->add_section('estilos_seccion', array(
        'title' => __('Estilos', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 200,
        'capability' => 'edit_theme_options',
    ));

    // 5. 
    // Section Contenidos del home central
    $wp_customize->add_section('contenidos_body_central', array(
        'title' => __('Contenidos del body central', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 300,
        'capability' => 'edit_theme_options',
    ));

    // 6. 
    // Section Contenidos del home central
    $wp_customize->add_section('contenidos_google_maps', array(
        'title' => __('Google Maps Config', 'textdomain'),
        'panel' => 'jw_opciones_custom',
        'priority' => 1000,
        'capability' => 'edit_theme_options',
    ));

    /* Acá se ponen las características */

    //Logo
    /*
    $wp_customize->add_setting('jw_logo_personalizado', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'jw_logo_personalizado', array(
        'priority' => 1,
        'label' => __('Logo del sitio', 'textdomain'),
        'section' => 'logo_personalizado_section',
        'mime_type' => 'image',
    )));
    */

    /* Iniciamos las opciones del subheader */
    // Número de whatsapp
    $wp_customize->add_setting('jw_whatsapp_numero', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('jw_whatsapp_numero', array(
        'label' => __('Número de Whatsapp', 'textdomain'),
        'section' => 'jw_subheader_section',
        'priority' => 10,
        'type' => 'text',
    ));
    // Dirección
    $wp_customize->add_setting('jw_direccion_subheader', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('jw_direccion_subheader', array(
        'label' => __('Dirección', 'textdomain'),
        'section' => 'jw_subheader_section',
        'priority' => 10,
        'type' => 'text',
    ));

    // Correo electrónico
    $wp_customize->add_setting('jw_correoe_subheader', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('jw_correoe_subheader', array(
        'label' => __('Correo electrónico', 'textdomain'),
        'section' => 'jw_subheader_section',
        'priority' => 10,
        'type' => 'text',
    ));

    /* GOOGLE ANALYTICS */
    //Google Analytics
    $wp_customize->add_setting('my_google_analytics', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('my_google_analytics', array(
        'label' => __('Código de Google Analytics', 'textdomain'),
        'section' => 'google_analytics_section',
        'priority' => 30,
        'type' => 'textarea',
    ));

    $redes_socials = redesSocialesDisponibles(1);

    $prioridad = 10;
    foreach($redes_socials as $llave => $cadaRed)
    {

        //Redes Sociales: Facebook
        $wp_customize->add_setting($llave, array(
            'type' => 'option',
            'capability' => 'edit_theme_options',
        ));
    
        $wp_customize->add_control($llave, array(
            'label' => __($cadaRed, 'textdomain'),
            'section' => 'social_section',
            'priority' => $prioridad,
            'type' => 'text',
        ));

        $prioridad++;

    }

    // 4. - Estilos
    // 4.1. Color central - 
    $wp_customize->add_setting('estilos_seccion_colorcentral1', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'estilos_seccion_colorcentral1',
        array(
            'label' => 'Color central Body',
            'section' => 'estilos_seccion',
            'priority' => 50,
            'settings' => $color['slug']
        )
    ));
    // 4.2. Color fondo del formulario
    $wp_customize->add_setting('estilos_seccion_form_central', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'estilos_seccion_form_central',
        array(
            'label' => 'Color fondo formulario',
            'section' => 'estilos_seccion',
            'priority' => 70,
            'settings' => $color['slug']
        )
    ));

    // 5. - Contenidos body central
    // 5.1. - Formulario
    $wp_customize->add_setting('body_central_form_code', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('body_central_form_code', array(
        'label' => __('Código del formulario', 'textdomain'),
        'section' => 'contenidos_body_central',
        'priority' => 90,
        'type' => 'textarea',
    ));
    // 5.2. - Título del formulario
    $wp_customize->add_setting('body_central_form_titulo', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('body_central_form_titulo', array(
        'label' => __('Título del formulario', 'textdomain'),
        'section' => 'contenidos_body_central',
        'priority' => 10,
        'type' => 'text',
    ));
    // 5.3. - Descripción del formulario
    $wp_customize->add_setting('body_central_form_descripcion', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('body_central_form_descripcion', array(
        'label' => __('Título del formulario', 'textdomain'),
        'section' => 'contenidos_body_central',
        'priority' => 20,
        'type' => 'textarea',
    ));
    // 6.1. - Código de Google API
    $wp_customize->add_setting('contenidos_google_maps_apimaps', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('contenidos_google_maps_apimaps', array(
        'label' => __('Código Google API', 'textdomain'),
        'section' => 'contenidos_google_maps',
        'priority' => 20,
        'type' => 'text',
    ));
    // 6.2. - Longitud
    $wp_customize->add_setting('contenidos_google_maps_longitud', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('contenidos_google_maps_longitud', array(
        'label' => __('Longitud', 'textdomain'),
        'section' => 'contenidos_google_maps',
        'priority' => 30,
        'type' => 'text',
    ));
    // 6.3. - Latitud
    $wp_customize->add_setting('contenidos_google_maps_latitud', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('contenidos_google_maps_latitud', array(
        'label' => __('Latitud', 'textdomain'),
        'section' => 'contenidos_google_maps',
        'priority' => 40,
        'type' => 'text',
    ));
    // 6.4. - Zoom
    $wp_customize->add_setting('contenidos_google_maps_zoom', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('contenidos_google_maps_zoom', array(
        'label' => __('Zoom', 'textdomain'),
        'section' => 'contenidos_google_maps',
        'priority' => 50,
        'type' => 'text',
    ));
    // 6.5. - Ubicación en mapa Google
    $wp_customize->add_setting('contenidos_google_maps_ubicacion', array(
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control('contenidos_google_maps_ubicacion', array(
        'label' => __('Ubicación en Google Maps', 'textdomain'),
        'section' => 'contenidos_google_maps',
        'priority' => 60,
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'jw_customizar_template');


/* Cargamos las opciones del template */
/*
if (get_option('jw_logo_personalizado')) {
    function add_google_analytics_code()
    {
        // echo get_option('jw_logo_personalizado');
        $foto = wp_get_attachment_image( get_option('jw_logo_personalizado'), $size, $icon, $attr );
    }
    add_action('wp_head', 'add_google_analytics_code');
}
*/

add_theme_support('custom-logo');
function jwmtheme_custom_logo_setup()
{
    $defaults = array(
        'height'               => 'auto',
        'width'                => 760,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'jwmtheme_custom_logo_setup');

function euro($numero)
{
    return number_format($numero, 2, ',', '.') . "&euro;";
}

function primeraPalabraSpan($frase){
    $e = explode(" ", $frase);
    $salida = '';
    foreach($e as $clave => $palabra):
        if($clave == 0)
            $salida .= '<span>'.$palabra.'</span>';
        else
            $salida .= ' '.$palabra;
    endforeach;
    $salida = trim($salida);
    return $salida;
}

function add_scripts() {
  wp_enqueue_script('your-script', 'path/to/your-script.js', array('jquery'));

  wp_localize_script('your-script', 'my_ajax_object', array(
    'ajax_url' => admin_url('admin-ajax.php')
  ));
}
add_action('wp_enqueue_scripts', 'add_scripts');



function get_event_by_id() {
  $id = $_POST['id'];
  $event = get_posts(array(
    'post_type' => 'evento',
    'meta_key' => 'fecha_del_evento',
    'meta_value' => $id,
    'posts_per_page' => 1
  ));
  if (count($event) > 0) {
    $event = $event[0];
    $response = array(
      'id' => $event->ID,
      'title' => $event->post_title,
      'description' => get_field('descripcion_evento', $event->ID)
    );
    echo json_encode($response);
  } else {
    echo json_encode(array('error' => 'No se encontró ningún evento con esa fecha.'));
  }
  wp_die();
}
add_action('wp_ajax_get_event_by_id', 'get_event_by_id');
add_action('wp_ajax_nopriv_get_event_by_id', 'get_event_by_id');

