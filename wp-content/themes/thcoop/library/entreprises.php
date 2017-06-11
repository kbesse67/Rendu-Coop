<?php
/**
 * Titre entreprises
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 $labels = array(
 'name' => 'entreprise',
 'singular_name' => 'entreprise',
 'add_new' => 'Ajouter une entreprise',
 'add_new_item' => 'Ajouter une entreprise',
 'edit_item' => 'Editer une entreprise',
 'new_item' => 'Nouvelle entreprise',
 'all_items' => 'Toutes les entreprises',
 'view_item' => 'Voir entreprise',
 'search_items' => 'Chercher entreprise',
 'not_found' => 'Aucune entreprise trouvée',
 'not_found_in_trash' => 'Aucune entreprises trouvé dans la corbeille',
 'parent_item_colon' => '',
 'menu_name' => 'entreprise'
 );
 $args = array(
 'labels' => $labels,
 'description' => 'entreprise lien',
 'public' => true,
 'publicly_queryable' => true,
 'show_ui' => true,
 'show_in_menu' => true,
 'query_var' => true,
 'rewrite' => array( 'slug' => 'entreprise' ),
 'capability_type' => 'post',
 'has_archive' => true,
 'hierarchical' => false,
 'menu_position' => null,
 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
 );
 register_post_type('entreprise', $args );
 }
