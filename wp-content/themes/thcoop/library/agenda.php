<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 function cpt_init() {
 $labels = array(
 'name' => 'agenda',
 'singular_name' => 'Agenda',
 'add_new' => 'Ajouter une date',
 'add_new_item' => 'Ajouter une date',
 'edit_item' => 'Editer une date',
 'new_item' => 'Nouvelle date',
 'all_items' => 'Toutes les dates',
 'view_item' => 'Voir la date',
 'search_items' => 'Chercher date',
 'not_found' => 'Pas de dates trouvées',
 'not_found_in_trash' => 'Aucune dates trouvées dans la corbeille',
 'parent_item_colon' => '',
 'menu_name' => 'Agenda'
 );
 $args = array(
 'labels' => $labels,
 'description' => "Dates de l'agenda",
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_menu' => true,
 'query_var' => true,
 'rewrite' => array( 'slug' => 'films' ),
 'capability_type' => 'post',
 'has_archive' => true,
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
 );
 register_post_type('films', $args );
 }
 add_action('init', 'cpt_init');
