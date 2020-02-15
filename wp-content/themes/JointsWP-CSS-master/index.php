<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
<div class="body">
	<div class = "slider">
		<div class="orbit" role="region" aria-label="Opticron Slider" data-orbit>

			<div class="orbit-wrapper">
				<div class="orbit-controls">
					<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
					<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
				</div>
				<ul class="orbit-container">
					<li class="is-active orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="http://localhost/opticron/wp-content/uploads/2020/02/Desktop_Easy-Resize.com_.jpg" alt="bench">
						</figure>
					</li>
					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="http://localhost/opticron/wp-content/uploads/2020/02/owl.jpg" alt="Owl">
						</figure>
					</li>
					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="http://localhost/opticron/wp-content/uploads/2020/02/swans.jpg" alt="Swans">
						</figure>
					</li>
					<li class="orbit-slide">
						<figure class="orbit-figure">
							<img class="orbit-image" src="http://localhost/opticron/wp-content/uploads/2020/02/50-years.jpg" alt="50 Years">
						</figure>
					</li>
				</ul>
			</div>

			<nav class="orbit-bullets">
				<button class="is-active" data-slide="0">
					<span class="show-for-sr">First slide details.</span>
					<span class="show-for-sr" data-slide-active-label>Current Slide</span>
				</button>
				<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				<button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
			</nav>
		</div>
	</div>		

	<br><br><br><br>		
		
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-8 large-8 cell" role="main">
				<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="column">
						<div class="card" style="width: 300px;">
							<div class="card-section">
								<h4><a href="#0" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
								<img src="<?php the_field('thumbnail'); ?>">
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
					</div>
					
				<?php endwhile; ?>	
					<div class="column">
						<?php joints_page_navi(); ?>
					</div>
				<?php else : ?>
					<div class="column">
						<?php get_template_part( 'parts/content', 'missing' ); ?>
					</div>	
				<?php endif; ?>
				</div>																				
			</main> <!-- end #main -->
			
			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

		<section class="specials">

			<div class="subtitle">
				<h1>Special Offers</h1>
			</div>

			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				
				<?php $homepageOffers = new WP_Query(array(
					'posts_per_page' => 3,
					'post_type' => 'Special Offers'
				)); ?>

				<main class="main small-12 medium-8 large-8 cell" role="main">
					<div class="row">
					<?php if ($homepageOffers->have_posts()) : while ($homepageOffers->have_posts()) : $homepageOffers->the_post(); ?>
						<div class="column">
							<div class="card" style="width: 300px;">
								<img src="<?php the_field('thumbnail'); ?>">
								<div class="card-section">
									<p><a href="#0" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
									<p><strong><?php the_excerpt(); ?></strong></p>
								</div>
							</div>
						</div>
						
					<?php endwhile; ?>	
						<div class="column">
							<?php joints_page_navi(); ?>
						</div>
					<?php else : ?>
						<div class="column">
							<?php get_template_part( 'parts/content', 'missing' ); ?>
						</div>	
					<?php endif; ?>
				</main> <!-- end #main -->
			</div>		
		</section>
			
			
		<section class="categories">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">

				<?php $homepageCategories = new WP_Query(array(
				'post_type' => 'Product Categories'
				)); ?>

				<main class="main small-12 medium-8 large-8 cell" role="main">
					<div class="row">
						<?php if ($homepageCategories->have_posts()) : while ($homepageCategories->have_posts()) : $homepageCategories->the_post(); ?>
							<div class="column">
								<div class="card" style="width: 300px;">
									<img src="<?php the_field('thumbnail'); ?>">
									<div class="card-section">
										<h4><a href="#0" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
									</div>
								</div>
							</div>
							
						<?php endwhile; ?>	
							<div class="column">
								<?php joints_page_navi(); ?>
							</div>
						<?php else : ?>
							<div class="column">
								<?php get_template_part( 'parts/content', 'missing' ); ?>
							</div>	
						<?php endif; ?>
					</div>
				</main>
			</div> <!-- end #inner-content -->			
		</section>

	</div> <!-- end #content -->

</div>

<?php get_footer(); ?>