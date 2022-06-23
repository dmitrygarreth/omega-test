<?php
/**
 *
 * Template Name: Home page
 *
 */

get_header();


?>


    <section class="page-section news-section grid-section">
        <div class="page-section__container">
            <div class="wrapper">
                <div class="page-section__content">
                    <div class="row">
                        <?php
                        $args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
                        $the_query = new WP_Query( $args ); ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                            <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                                $thumbnail_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
                            ?>
                            <div class="col-3">
                                <div class="post-grid">
                                    <div class="post-grid__image">
                                        <img src="<?php echo $thumbnail_image ?>" />
                                    </div>
                                    <div class="post-grid__info">
                                        <div class="post-grid__title">
                                            <a href="#"><?php the_title(); ?></a>
                                        </div>
                                        <div class="post_grid__desc">
                                            <?php the_content( 'Read more ...' );; ?>
                                        </div>
                                        <div class="post_grid__more">
                                            Show more
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endwhile; ?>

                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

