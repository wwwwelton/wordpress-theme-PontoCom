<?php 
//Inclusão do Arquivo para Menu Responsivo
require_once get_template_directory().'/inc/wp-bootstrap-navwalker.php';

//Carregamento CSS e JS
function load_scripts() {
    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style('font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css', array(), '5.13.0', 'all');
    wp_enqueue_style('estilo', get_template_directory_uri().'/assets/css/estilo.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

//Registro de Menus
register_nav_menus( 
    array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    )
);

//Habilitar Imagens de Destaque
add_theme_support('post-thumbnails');

//Habilitar a Tag Title
add_theme_support('title-tag');

//Adicionar Logomarca Customizada
add_theme_support('custom-logo', array(
    'width'      => 205,
    'height'     => 70,
    'flex-width' => true,
    'flex-height' => true
));

//Registro de Sidebars e Widgets
function load_sidebars() {
    register_sidebar(
        array(
            'name'          => ('Endereço Rodapé'),
            'id'            => 'footer-adress',
            'description'   => ('Adicione suas informações de Endereço'),
            'before_widget' => '<div class="text-light">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-light"><i class="fas fa-envelope fa-2x mr-2 text-light"></i>',
            'after_title'   => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name'          => ('Pensamento'),
            'id'            => 'footer-think',
            'description'   => ('Adicione seus pensamentos'),
            'before_widget' => '<div class="card-body text-light">',
            'after_widget'  => '</div>',
            'before_title'  => '<h5 class="text-light"><i class="fab fa-pagelines fa-2x mr-2 text-light"></i>',
            'after_title'   => '</h5>'
        )
    );

    register_sidebar(
        array(
            'name'          => ('Barra Lateral'),
            'id'            => 'sidebar-right',
            'description'   => ('Adicione Widgets na Barra Lateral.'),
            'before_widget' => '<div class="card my-3">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="card-header">',
            'after_title'   => '</div><div class="card-body card-list">'
        )
    );

    register_sidebar(
        array(
            'name'          => ('Social Icons'),
            'id'            => 'social-icons',
            'description'   => ('Adicione suas Redes Sociais aqui'),
            'before_widget' => '<div class="text-right py-2">',
            'after_widget'  => '</div>'
        )
    );

    register_sidebar(
        array(
            'name'          => ('Formulário de Contato'),
            'id'            => 'contact',
            'description'   => ('Adicione o formulário de contato com um campo de texto'),
            'before_widget' => '<div class="py-4">',
            'after_widget'  => '</div>'
        )
    );
}

add_action( 'widgets_init', 'load_sidebars' );

//Permite SVG no Site
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');