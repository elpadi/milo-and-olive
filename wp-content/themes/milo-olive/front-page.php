<?php get_header(); ?>

<div id="main-holder" class="cf">
	<div id="main" class="cf">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post();?>

            <div id="page_content">



								<?php // Repeater
									if( have_rows('images') ): ?>

										<div id="home-slider" class="js-slider">

											<?php while ( have_rows('images') ) : the_row(); ?>

												<?php $image = get_sub_field('image'); ?>

												<div class="home-slider__item">

													<?php echo wp_get_attachment_image( $image, 'full', false, array( "class" => "block") ); ?>

												</div>

											<?php endwhile; ?>

										</div>

									<?php endif; // End Repeater ?>



        		<?php the_content(); ?>

                <div id="home-featured-area">
					<?php $featuredItemQuery = new WP_Query('category_name=home&posts_per_page=5'); ?>
                    <?php while ($featuredItemQuery->have_posts()) : $featuredItemQuery->the_post(); ?>
                        <div class="entry" id="post-<?php the_ID(); ?>">

                            <?php
                            if ( has_post_thumbnail()) { ?>
                                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'rebecca_hawkes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><div class="thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                </a>
                            <?php } else {
                            }
                            ?>

                            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'rebecca_hawkes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>

                            <?php the_content(); ?>
                        </div>

					<?php endwhile; ?>

                </div> <!-- #home-featured-area -->

            </div><!-- #page_content -->

		<?php endwhile; ?>

	<?php endif; ?>

    </div> <!-- #main -->
    <?php get_sidebar(); ?>
</div> <!-- #main-holder -->

<?php get_footer(); ?>
