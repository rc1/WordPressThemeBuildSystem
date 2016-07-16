extends layout.php.jade

block body-content

    #my-custom-post-type-container
        h1 My Custom Post Type List

        ul
            - $args = array( 'post_type' => 'my-custom-post-type', 'posts_per_page' => 100 );
            - $loop = new WP_Query( $args );
            - while ( $loop->have_posts() ) : $loop->the_post();
                li: a( href= esc_url( get_permalink() ) )= the_title();
            - endwhile;
