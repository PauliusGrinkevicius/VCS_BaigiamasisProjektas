<?php 
 $blokai_arguments = array(
 'post_type' => 'blokas',
'posts_per_page' => -1,
'order' => 'asc'
 );
 $blokas = new WP_Query( $blokai_arguments );
 ?>

<!-- 
Darbo patirtis
--> 

<section class="dp" id="darbo-patirtis">
    <h2> <?php the_field('antraste2', 24); ?> </h2>
    <div class="darbo-patirtis">
    
 <!-- 
Nematomas blokas1
--> 
    
         <div class="nematomi-blokai"> 
             <?php while( $blokas->have_posts() ) : $blokas->the_post(); ?>
            <div class="bubble"> <h4><?php the_field('paragrafas1'); ?> </h4>
                    <p> <?php the_field('paragrafas2'); ?>  </p>
                    <p> <?php the_field('paragrafas3'); ?></p>
             </div>
             <?php endwhile; ?>
        </div>

        <div class="timeline">
        </div>

        <span class="dot-border"> 
        <span class="red-dot"> </span>
        </span>

        <span class="dot-border2"> 
        <span class="red-dot2"> </span>
        </span>

        <span class="dot-border3"> 
        <span class="red-dot3"> </span>
        </span>

        <span class="dot-border4"> 
        <span class="red-dot4"> </span>
        </span>


        <div class="blokai-kaireje">     
                <?php while( $blokas->have_posts() ) : $blokas->the_post(); if($blokas->current_post %2 == 0):?>
            <div class="chat-bubbles-left">
                 <div class="bubble<?php echo $blokas->current_post+1;?>">
                    <h4> <?php the_field('paragrafas1'); ?> </h4>
                    <p> <?php the_field('paragrafas2'); ?>  </p>
                    <p> <?php the_field('paragrafas3'); ?> </p>
                </div>  
            </div>
                <?php endif; endwhile; ?>
        </div>

        <div class="blokai-desineje">       
            <?php while( $blokas->have_posts() ) : $blokas->the_post(); if($blokas->current_post %2 !== 0):?>
            <div class="chat-bubbles-right">
                <div class="bubble<?php echo $blokas->current_post+1;?>">
                    <h4> <?php the_field('paragrafas1'); ?> </h4>
                    <p> <?php the_field('paragrafas2'); ?> </p>
                    <p> <?php the_field('paragrafas3'); ?> </p>
                </div>
            </div>
            <?php endif; endwhile; ?>
        </div>
    </div>
    <div class="pilka-linija"> 
    </div>
</section>