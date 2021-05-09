<?php get_header(); ?>

<div id="main-holder" class="cf">
    <div id="main" class="archives cf">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post();?>
            
            <div class="entry" id="post-<?php the_ID(); ?>">
            
                        <?php
                        if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'milo_olive'), the_title_attribute('echo=0')); ?>" rel="bookmark"><div class="thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            </a>
                        <?php } else {
                        }
                        ?>
                        
                        <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'milo_olive'), the_title_attribute('echo=0')); ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
                        <div class="meta">
                            <?php echo get_the_date(); ?> 
                        </div>
                        
                        <div class="excerpt">
                            <?php the_excerpt(); ?>
                            <div class="more">
                                <a class="button white" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('Read more', 'milo_olive'); ?></a>
                            </div>
                        </div>
                    </div>

        <?php endwhile; ?>

    <?php endif; ?>
    
    <nav id="nav-posts" class="cf">
        <div id="nav-previous"><?php next_posts_link('< Older Articles'); ?></div>
        <div id="nav-next"><?php previous_posts_link('Newer Articles >'); ?></div>
    </nav><!-- #nav-posts -->
    
    </div> <!-- #main -->
    <?php get_sidebar(); ?> 
</div> <!-- #main-holder -->        

<?php get_footer(); ?>