<?php get_header(); 

    $homepageOffers = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => 'Special Offers'
    ));

    ?>

    <section class="main"></section>
    
   
    <section class="specials">
        <ul id="offers" class="small-block-grid-1 medium-grid-1 large-block-grid-3" data-equalizer data-equalize-on="large"> <?php
            while($homepageOffers->have_posts()) {
                $homepageOffers->the_post(); ?>

                <li style="list-style-type: none;">
                    <a href="#0">
                        <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>" />
                    </a>
                    <p><a href="#0" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
                    <p><?php the_excerpt(); ?></p>
                    
                </li>

                <?php
            }; ?>
        </ul>
    </section>
    <?php

    $homepageCategories = new WP_Query(array(
        'post_type' => 'Product Categories'
    )); ?>
    
    <ul id="categories"> <?php
        while($homepageCategories->have_posts()) {
            $homepageCategories->the_post(); ?>

        <li style="list-style-type: none;">
            <div class="product-card">
                <div class="product-card-thumbnail">
                    <a href="#"><img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>" /></a>
                </div>
                <h2 class="product-card-title"><a href="#"><?php the_title(); ?></a></h2>   
            </div>
        </li>

        <?php } ?>
    </ul>
    
    <?php get_footer(); ?>