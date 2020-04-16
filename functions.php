  <?php

    function mytheme_wp_styles()
    {
        wp_enqueue_style('style_css',  get_stylesheet_uri());
        wp_enqueue_style('main_css',  get_stylesheet_directory_uri()  . '/assets/css/main.css');
        wp_enqueue_style('hover-min_css',  get_stylesheet_directory_uri()  . '/assets/css/hover-min.css');
        wp_enqueue_style('slick_css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');


        wp_enqueue_script('slick_js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '', true);
        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
        wp_enqueue_script('min_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    }

    add_action('wp_enqueue_scripts', 'mytheme_wp_styles');


    // Ativando suporte a imagem destacada
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1280, 720, true); // default Featured Image dimensions (cropped)

    }


    add_theme_support('title-tag');
    //meus post types
    function meus_posts_types()
    {
        //Apresentações
        register_post_type(
            'Apresentações',
            array(
                'labels'          => array(
                    'name'           => __('Apresentações'),
                    'singular_name'  => __('Apresentação')
                ),
                'public'          => true,
                'has_archive'     => true,
                'menu_icon'       => 'dashicons-excerpt-view',
                'supports'        => array('tittle', 'thumbnail', 'page_attributes'),
            )
        );
    }
    add_action('init', 'meus_posts_types');

    //Incluir Bootsrap CSS
    function bootstrap_css()
    {
        wp_enqueue_style(
            'bootsrap_css',
            get_stylesheet_directory_uri() . '/assets/css/bootsrap.min.css',
            array(),
            '4.4.1'
        );
    }
    add_action('wp_enqueue_scripts', 'bootstrap_css');

    //Incluir Bootstrap JS
    function bootstrap_js()
    {
        wp_enqueue_script(
            'bootstrap_js',
            get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js',
            array('jquery'),
            '4.4.1',
            true
        );
    }
    add_action('wp_enqueue_scripts', 'bootstrap_js');
