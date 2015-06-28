<?php

function hhcarvalho_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());


}

add_action('wp_enqueue_scripts', 'hhcarvalho_resources');
// registrando menus
register_nav_menus([
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    ]);

// <!-- Pega o Id do pai mais velho do post -->

function getMostAncestorID($post){
    if ($post->post_parent){
        $ancestral = array_reverse(get_post_ancestors ($post->ID));
        return $ancestors [0];

    }

    return $post->ID;
}
// verifica se o post tem filho

function has_children($post)
{
return count(get_pages('child_of='.$post->ID));
} 
