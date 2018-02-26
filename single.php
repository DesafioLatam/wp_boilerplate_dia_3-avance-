<?php get_header() ?>

	<header class="masthead text-center text-white d-flex" style="background: url('<?php the_post_thumbnail_url() ?>') no-repeat center center; background-size: cover; ">
		<div class="container my-auto">
		 <div class="row">
			 <div class="col-lg-10 mx-auto">
				 <h1 class="text-uppercase">
					 <strong><?php the_title(); ?></strong>
				 </h1>
				 <hr>
			 </div>
		 </div>
		</div>
	</header>

	<?php if ( have_posts() ) { ?>
	    <?php while ( have_posts() ) {
	the_post(); ?>

			<div class="container mt-5">
				<div class="row">
					<div class="col-lg-7">
					  <?php the_content(); ?>
					</div>
					<div class="col-lg-5 sidebar">
						<?php get_sidebar() ?>
					</div>
				</div>
			</div>

		<?php }; ?>
	<?php }; ?>

<?php get_footer() ?>
