<?php
get_header(); ?>

	<div class="billboard row mx-0">
		<?php 
		$banner = get_field('banner'); ?>
		
		<img src="<?php echo $banner['image']['sizes']['thumbnail']; ?>"
			 alt="<?php echo $banner['image']['alt']; ?>"
			 class="img-fluid"
			 srcset="<?php echo $banner['image']['sizes']['medium']; ?> 768w,
					 <?php echo $banner['image']['sizes']['large']; ?> 1024w,
					 <?php echo $banner['image']['url']; ?> 1920w" />
		<div class="col-12 text-center hero-text py-3">
			<h4><?php echo $banner['tagline']; ?></h4>
		</div>
	</div>

	<div class="container mt-3 mb-3">
		<div class="col-lg-6">
			<?php 
			$intro = get_field('intro'); ?>
			<h1><?php echo $intro['title']; ?></h1>
			<?php echo $intro['content']; ?>
		</div>
		<div class="col-lg-6">
			<?php 
			$featured_card = get_field('featured_card'); ?>
			<div class="card orange">
				<img class="card-img-top img-responsive" alt="Card image cap" src="<?php echo $featured_card['image']['url']; ?>">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<h2 class="card-text">
								<?php echo $featured_card['content']; ?>
							</h2>
						</div>
						<div class="col-lg-6">
							<p class="text-right">
								<a href="<?php echo $featured_card['button_link']; ?>" class="card-link"><?php echo $featured_card['button_title']; ?></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
	<?php if( have_rows('cards') ): ?>

		<div class="card-deck">

		<?php while( have_rows('cards') ): the_row(); 

			// vars
			$color = get_sub_field('color');
			$content = get_sub_field('content');
			$button_title = get_sub_field('button_title');
			$button_link = get_sub_field('button_link'); ?>
			
			<div class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div class="card orange">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="card-img-top img-fluid" />
					<div class="card-body">
						<?php echo $content; ?>
					</div>
					<div class="card-footer">
						<a href="<?php echo $button_link; ?>">
							<?php echo $button_title; ?>
						</a>
					</div>
				</div>
			</div>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>
	</div>

<?php
get_footer();
