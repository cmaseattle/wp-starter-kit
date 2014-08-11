<?php
add_action( 'init', 'custom_post_type' );

/*
The following function defines all of the parameters
for a custom post type called "Example". If you want to create
a post type for, say, "Staff" you should replace all of the
instances of the word "example" with the appropriate words for
"staff".
*/
function custom_post_type() {
  $labels = array(
    'name'               => _x( 'Examples', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Example', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Examples', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Example', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Example', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Example', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Example', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Example', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Examples', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Examples', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Examples:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No examples found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No examples found in Trash.', 'your-plugin-textdomain' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'examples' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'example', $args );
}

/*
This is a taxonomy registered for the "examples" custom
post type above. Taxonomies are used exactly like categories
but you have more freedom over how they are delivered
and iterated over for using on the front-end of your site.

See the taxonomy.php file for showing all taxonomies.
*/
function create_book_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Taxonomies', 'taxonomy general name' ),
    'singular_name'     => _x( 'Taxonomy', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Taxonomies' ),
    'all_items'         => __( 'All Taxonomies' ),
    'parent_item'       => __( 'Parent Taxonomy' ),
    'parent_item_colon' => __( 'Parent Taxonomy:' ),
    'edit_item'         => __( 'Edit Taxonomy' ),
    'update_item'       => __( 'Update Taxonomy' ),
    'add_new_item'      => __( 'Add New Taxonomy' ),
    'new_item_name'     => __( 'New Taxonomy Name' ),
    'menu_name'         => __( 'Taxonomy' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'taxonomy' ),
  );

  register_taxonomy( 'taxonomy', array( 'examples' ), $args );
}

/*
This following function will list out the 5 most recent
posts of a custom post type based on the post type slug. It's
using the built-in functionality of WP_Query and can be changed
infinitely to your needs or removed completely. 

Use in any template file you want by simply calling the function:
<?php get_custom_post_list('post-slug'); ?>
*/

function get_custom_post_list($slug) {
  $query = new WP_Query( 
    array(
      'post_type'   => $slug,
      'post_count'  => 5
      /* more arguments */
    )
  );
  if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
      echo '<article>';
      echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
      echo '<p>'.get_the_excerpt().'</p>';
      echo '</article>';
    endwhile;
    wp_reset_postdata();
  else:
    echo 'Oops. No posts found!';
  endif;
}

?>