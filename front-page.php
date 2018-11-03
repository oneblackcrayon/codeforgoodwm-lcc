<?php
get_header(); ?>

	<div class="row mx-0">
		<?php 
		$banner = get_field('banner'); ?>
		
		<img src="<?php echo $banner['image']['url']; ?>" alt="<?php echo $banner['image']['alt']; ?>" />
		<div class="row text-center hero-text">
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
								<a href="<?php echo $featured_card['button_link']; ?>" class="btn btn-light"><?php echo $featured_card['button_title']; ?></a>
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
				<div class="card">
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
