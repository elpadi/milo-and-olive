<?php get_header(); ?>

<div id="main-holder" class="cf">
    <div id="main" class="cf">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post();?>
            
            <div id="page_content">
            
                <?php
                if (has_post_thumbnail()) { ?>
                    <div class="thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php } else {
                }
                ?>
                
                <?php the_content(); ?>
            </div><!-- #page_content -->

        <?php endwhile; ?>

    <?php endif; ?>
    
    </div> <!-- #main -->
    <?php get_sidebar(); ?> 
</div> <!-- #main-holder -->        

<?php get_footer(); ?>