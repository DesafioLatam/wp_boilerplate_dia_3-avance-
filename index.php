<?php get_header() ?>

<header class="masthead text-center text-white d-flex" style="background: url('<?php echo get_template_directory_uri() ?>/assets/images/order.jpg') no-repeat center center; background-size: cover; ">
  <div class="container my-auto">
   <div class="row">
     <div class="col-lg-10 mx-auto">
       <h1 class="text-uppercase">
         <strong>Blog</strong>
       </h1>
       <hr>
     </div>
   </div>
  </div>
</header>

<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) {
the_post(); ?>

<!-- Main Content -->
<div class="container m-5">
 <div class="row">
   <div class="col-lg-6 col-md-8">
     <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="img-fluid rounded">
   </div>
   <div class="col-lg-6 col-md-8">
     <div class="mt-5">
      <a href="<?php the_permalink() ?>">
        <h2 class="mb-3">
         <?php the_title(); ?>
        </h2>
      </a>
       <p><?php the_excerpt(); ?></p>
       <p class="post-meta">
         Entrada hecha por <span class="color-span"><?php the_author(); ?></span>, el <span class="color-span"><?php the_date() ?></span>.
      </p>
     </div>
   </div>
 </div>
</div>

   <?php }; ?>
<?php }; ?>

<?php get_footer() ?>
