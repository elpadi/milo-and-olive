<?php
/*
Template Name: Photo Gallery
 */
?>

<?php get_header(); ?>

<div id="main-holder" class="cf">
    <div id="main" class="cf">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post();?>
            
            <div id="page_content">
                <div class="gallery cf">
                    <?php
                    if (have_rows('images')) :
                        while (have_rows('images')) :
                            the_row();
                            $image = get_sub_field('image');
                            ?>
                        <a href="<?php echo $image['url']; ?>" class="grid-item" style="background-image:url(<?php echo $image['url']?>);") ></a> <!-- .grid-item -->
                            
                        <?php endwhile; ?>              
                    <?php endif; ?>  
                        </div> <!-- .gallery -->
            </div><!-- #page_content -->

        <?php endwhile; ?>

    <?php endif; ?>
    
    </div> <!-- #main -->
    <?php get_sidebar(); ?> 
</div> <!-- #main-holder -->        

<?php get_footer(); ?>