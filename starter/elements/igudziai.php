<?php 
 $igudziai_arguments = array(
 'post_type' => 'igudziai',
'posts_per_page' => -1,
'order' => 'asc'
 );
 $igudis = new WP_Query( $igudziai_arguments );

 ?>

<!-- 
ĮGŪDŽIA
--> 
<section class="section-igudziai" id="igudziai">
    <h2 class="heading-igudziai"> <?php the_field('antraste4', 24); ?> </h2>
    <div class="igudziai-container">
        <div class="igudziai-kaireje">
            <div class="igudziai">
            <?php while( $igudis->have_posts() ) : $igudis->the_post(); if($igudis->current_post %2 == 0):?>
                <h5> <?php the_field('igudziaiheading'); ?> <p> <?php the_field('igudziaiparagrafas'); ?> </p> </h5>
                <div class="progress-bar-container1">
                    <span class="progress-bar-fill" style="width:<?php echo the_field('igudziaiparagrafas') ?>"> </span>
                </div>  
            <?php endif;endwhile; ?>
            </div>     
        </div>
        <div class="igudziai-desineje">
            <div class="igudziai">
                <?php while( $igudis->have_posts() ) : $igudis->the_post(); if($igudis->current_post %2 !== 0): ?>
                <h5> <?php the_field('igudziaiheading'); ?> <p> <?php the_field('igudziaiparagrafas'); ?> </p> </h5>
                    <div class="progress-bar-container4">
                        <span class="progress-bar-fill" style="width:<?php echo the_field('igudziaiparagrafas') ?>"></span>
                    </div> 
                <?php endif;endwhile; ?>
            </div>
        </div>
    </div>   
</section>       
