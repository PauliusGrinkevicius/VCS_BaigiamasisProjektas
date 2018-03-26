<?php

$blokai_arguments = array(
     'post_type' => 'blokas2',
    'posts_per_page' => -1,
    'order' => 'asc'
     );
     $blokas2 = new WP_Query( $blokai_arguments );
?>
 <!-- 
Išsilavinimas
--> 
<section id="issilavinimas">
    <h2> <?php the_field('antraste3', 24); ?> </h2> 
    <div class="issilavinimas">

        <!-- 
Antras nematomas blokass
--> 

    <div class="nematomi-blokai2"> 
    <?php while( $blokas2->have_posts() ) : $blokas2->the_post(); ?>
    <div class="bubble"> <h4><?php the_field('paragrafas1'); ?> </h4>
                <p> <?php the_field('paragrafas2'); ?></p>
                <p><?php the_field('paragrafas3'); ?> </p>
    </div>
        <?php endwhile; ?>
<!--
    <div class="bubble"> <h4><?php the_field('paragrafas1'); ?></h4>
                <p> <?php the_field('paragrafas2'); ?></p>
                <p> <?php the_field('paragrafas3'); ?></p>
    </div>
    <div class="bubble"> <h4><?php the_field('paragrafas1'); ?> </h4>
                <p> <?php the_field('paragrafas2'); ?></p>
                <p> <?php the_field('paragrafas3'); ?></p>
    </div>
-->

    </div>

        <div class="timeline"> </div>

        <span class="dot-border5"> 
            <span class="red-dot5"> </span>
        </span>
        
        <span class="dot-border6"> 
            <span class="red-dot6"> </span>
        </span>
        
        <span class="dot-border7"> 
            <span class="red-dot7"> </span>
        </span>
        
    <div class="blokai-kaireje2"> 
        <?php while( $blokas2->have_posts() ) : $blokas2->the_post(); if($blokas2->current_post %2 == 0):?>
        <div class="chat-bubbles-left">
            <div class="bubble<?php echo $blokas2->current_post+1;?>">
                <h4> <?php the_field('paragrafas1'); ?></h4>
                <p><?php the_field('paragrafas2'); ?> </p>
                <p> <?php the_field('paragrafas3'); ?></p>
            </div>  
        </div>
        <?php endif; endwhile; ?>
    </div>
    <div class="blokai-desineje2">
        <?php while( $blokas2->have_posts() ) : $blokas2->the_post(); if($blokas2->current_post %2 !== 0):?>
        <div class="chat-bubbles-right">
            <div class="bubble<?php echo $blokas2->current_post+1;?>">
                <h4> <?php the_field('paragrafas1'); ?></h4>
                <p><?php the_field('paragrafas2'); ?> </p>
                <p> <?php the_field('paragrafas3'); ?> </p>
            </div>
        </div> 
         <?php endif; endwhile; ?>
    </div> 
    </div>    
</section>
