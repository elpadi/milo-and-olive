<?php
/*
Template Name: Menu
 */
?>

<?php 
$top_note_bread = get_field('top_note_bread'); 
$bottom_note_bread = get_field('bottom_note_bread');
?>

<?php get_header(); ?>

<div id="main-holder" class="cf">
	<div id="main" class="cf">
			
            <div id="menu">
            
            	<nav id="menus-nav">
                    <ul id="menu-tabs">
                        <li class="active"><a class="tab-control" href="#menu-2"><?php the_field('menu_2'); ?></a></li>
                        <li><a class="tab-control" href="#menu-1"><?php the_field('menu_1'); ?></a></li>
                        <li><a class="tab-control" href="#menu-3"><?php the_field('menu_3'); ?></a></li>
                        <li><a class="tab-control" href="#menu-bread"><?php the_field('menu_bread'); ?></a></li>
                        <li><a class="tab-control" href="#menu-kits"><?php the_field('menu_kits'); ?></a></li>
                    </ul>
                </nav>
                
                <section id="menu-2" class="tab-panel active"> <!-- start #menu-2 -->
                
                	<p class="top-note"><?php the_field('top_note'); ?></p> 
                
                	<?php if( have_rows('menu_sections_2') ):
                    
						while ( have_rows('menu_sections_2') ) : the_row(); ?>
			
						<?php if( get_row_layout() == 'title_top' ): ?>
                        
                        	<div class="menu-section title-top">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
						
						<?php  elseif( get_row_layout() == 'title_side' ): ?> 
                        
                        	<div class="menu-section title-side">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_only' ): ?> 
                        
                        	<div class="menu-section title-only">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>       
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
						
						<?php else :
			
						endif; ?>            
				
					<?php endwhile; ?><?php endif; ?> 
                    
					<?php if( get_field('bottom_note') ): ?>
                        <div class="menu-section menu-bottom-note">
                            <?php the_field('bottom_note'); ?>
                        </div> <!-- .menu-section -->
                    <?php endif; ?>        

                </section> <!-- #menu-2 --> 




                <section id="menu-bread" class="tab-panel"> <!-- start #menu-bread -->
                
                  <?php if( $top_note_bread ): ?>
                    <p class="top-note"><?php echo $top_note_bread; ?></p> 
                  <?php endif; ?>
                
                	<?php if( have_rows('menu_sections_bread') ):
                    
						while ( have_rows('menu_sections_bread') ) : the_row(); ?>
			
						<?php if( get_row_layout() == 'title_top' ): ?>
                        
                        	<div class="menu-section title-top">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
						
						<?php  elseif( get_row_layout() == 'title_side' ): ?> 
                        
                        	<div class="menu-section title-side">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_only' ): ?> 
                        
                        	<div class="menu-section title-only">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>       
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
						
						<?php else :
			
						endif; ?>            
				
					<?php endwhile; ?><?php endif; ?> 
                    
					<?php if( $bottom_note_bread ): ?>
            <div class="menu-section menu-bottom-note">
                <?php echo $bottom_note_bread; ?>
            </div> <!-- .menu-section -->
          <?php endif; ?>        

        </section> <!-- #menu-bread --> 



                
                <section id="menu-1" class="tab-panel"> <!-- start #menu-1 -->
                
                	<?php if( have_rows('menu_sections') ):
                    
						while ( have_rows('menu_sections') ) : the_row(); ?>
			
						<?php if( get_row_layout() == 'title_top' ): ?>
                        
                        	<div class="menu-section title-top">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
						
						<?php  elseif( get_row_layout() == 'title_side' ): ?> 
                        
                        	<div class="menu-section title-side">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_only' ): ?> 
                        
                        	<div class="menu-section title-only">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>       
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
						
						<?php else :
			
						endif; ?>            
				
					<?php endwhile; ?><?php endif; ?>       

                </section> <!-- #menu-1 --> 
                
                <section id="menu-3" class="tab-panel"> <!-- start #menu-3 -->
                
                	<?php if( have_rows('menu_sections_3') ):
                    
						while ( have_rows('menu_sections_3') ) : the_row(); ?>
			
						<?php if( get_row_layout() == 'title_side' ): ?>
                        
                        	<div class="menu-section title-side">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                            <p class="menu-item-location"><?php the_sub_field('menu_item_location'); ?></p>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_only' ): ?> 
                        
                        	<div class="menu-section title-only">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>
									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>       
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_side_btg' ): ?> 
                        		
                                <div class="menu-section title-side title-side-btg">
                                    <h1><?php the_sub_field('section_title'); ?></h1>
                                    
                                    <?php if( get_sub_field('note') ): ?>
                                        <p class="note"><?php the_sub_field('note'); ?></p>
                                    <?php endif; ?>
                                    
                                    <?php if( have_rows('menu_items') ):
                                    while ( have_rows('menu_items') ) : the_row(); ?>
                                        <div class="menu-item cf">
                                            <div class="menu-item-left">
                                                <h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                                <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                                <p class="menu-item-location"><?php the_sub_field('menu_item_location'); ?></p>
                                            </div> <!-- .menu-item-left -->
                                            <div class="menu-item-right">
                                                <p class="menu-item-price">
                                                	<?php if( get_sub_field('btg_price') ): ?>
                                                    	btg <span  class="btg-price"> <?php the_sub_field('btg_price'); ?></span>
                                                        <span class="btg-divider">/</span>
                                                    <?php endif; ?> 
                                                    <?php the_sub_field('menu_item_price'); ?>
                                                </p>
                                            </div> <!-- .menu-item-right -->
                                        </div> <!-- .menu-item -->	
                                    <?php endwhile; ?>
                                                            
                                    <?php endif; ?>  
                                
                                </div> <!-- .menu-section -->
	
						<?php else :
			
						endif; ?>            
				
					<?php endwhile; ?><?php endif; ?>      

                </section> <!-- #menu-3 --> 

                <section id="menu-kits" class="tab-panel"> <!-- start #menu-kits -->
                
                <?php $note_kits = get_field('note_kits'); ?>
                
                <?php if( $note_kits ): ?>
                  <p class="top-note"><?php echo $note_kits; ?></p>
                <?php endif; ?>

                	<?php if( have_rows('menu_sections_kits') ):
                    
						while ( have_rows('menu_sections_kits') ) : the_row(); ?>
			
						<?php if( get_row_layout() == 'title_top' ): ?>
                        
                        	<div class="menu-section title-top">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
								while ( have_rows('menu_items') ) : the_row(); ?>

                <?php $pdf = get_sub_field('pdf'); ?>

									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                            <?php if( $pdf ): ?>
                                              <a href="<?php echo $pdf; ?>" class="btn  btn--menu" target="_blank"><?php the_sub_field('pdf_link_text'); ?></a>
                                            <?php endif; ?>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
						
						<?php  elseif( get_row_layout() == 'title_side' ): ?> 
                        
                        	<div class="menu-section title-side">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
                while ( have_rows('menu_items') ) : the_row(); ?>
                
                <?php $pdf = get_sub_field('pdf'); ?>

									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                        	<h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2>
                                            <p class="menu-item-description"><?php the_sub_field('menu_item_description'); ?></p>
                                                                                                                            <?php if( $pdf ): ?>
                                              <a href="<?php echo $pdf; ?>" class="btn  btn--menu" target="_blank"><?php the_sub_field('pdf_link_text'); ?></a>
                                            <?php endif; ?>
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
                            <?php  elseif( get_row_layout() == 'title_only' ): ?> 
                        
                        	<div class="menu-section title-only">
                            	<h1><?php the_sub_field('section_title'); ?></h1>
                                
                                <?php if( get_sub_field('note') ): ?>
                                	<p class="note"><?php the_sub_field('note'); ?></p>
                                <?php endif; ?>
                                
                                <?php if( have_rows('menu_items') ):
                while ( have_rows('menu_items') ) : the_row(); ?>
                
                <?php $pdf = get_sub_field('pdf'); ?>

									<div class="menu-item cf">
                                    	<div class="menu-item-left">
                                          <h2 class="menu-item-title"><?php the_sub_field('menu_item_title'); ?></h2> 
                                                                                                                      <?php if( $pdf ): ?>
                                              <a href="<?php echo $pdf; ?>" class="btn  btn--menu" target="_blank"><?php the_sub_field('pdf_link_text'); ?></a>
                                            <?php endif; ?>      
                                        </div> <!-- .menu-item-left -->
                                        <div class="menu-item-right">
                                        	<p class="menu-item-price"><?php the_sub_field('menu_item_price'); ?></p>
                                        </div> <!-- .menu-item-right -->
                                    </div> <!-- .menu-item -->	
								<?php endwhile; ?>
														
								<?php endif; ?>  
                            
                            </div> <!-- .menu-section -->
                            
						
						<?php else :
			
						endif; ?>            
				
					<?php endwhile; ?><?php endif; ?> 
                    
					<?php if( get_field('bottom_note') ): ?>
                        <div class="menu-section menu-bottom-note">
                            <?php the_field('bottom_note'); ?>
                        </div> <!-- .menu-section -->
                    <?php endif; ?>        

                </section> <!-- #menu-kits -->     
                

                
            </div><!-- #menu -->
    
    </div> <!-- #main -->
    <?php get_sidebar(); ?>	
</div> <!-- #main-holder -->        

<?php get_footer(); ?>