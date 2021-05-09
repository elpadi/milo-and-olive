<?php get_header(); ?>

<div id="main-holder" class="cf">
	<div id="main" class="cf">

	<?php if ( have_posts() ) : ?>
				
		<?php while ( have_posts() ) : the_post();?>
			
            <div id="post_content" id="post-<?php the_ID(); ?>">
            			
                        <h3><?php the_title(); ?></h3>
                        <div class="meta">
							<?php echo get_the_date(); ?> 
						</div>
                        
						<?php
						if ( has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'rebecca_hawkes' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><div class="thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
                            </a>
						<?php } else {
						}
						?>
                        
                        <?php the_content(); ?>
                        
            </div> <!-- #post_content -->            

		<?php endwhile; ?>

	<?php endif; ?>
    
    </div> <!-- #main -->
    <?php get_sidebar(); ?>	
</div> <!-- #main-holder -->        

<?php get_footer(); ?>