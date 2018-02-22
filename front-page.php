<?php get_header() ?>

<!-- Hero Section -->
   <header class="masthead text-center text-white d-flex" style="background: url('<?php echo get_theme_file_uri() ?>/assets/images/home-bg.jpg') no-repeat center center; background-size: cover; ">
     <div class="container my-auto">
       <div class="row">
         <div class="col-lg-10 mx-auto">
           <h1 class="text-uppercase">
             <strong>Tu marca, es tu verdadera identidad</strong>
           </h1>
           <hr>
         </div>
         <div class="col-lg-8 mx-auto">
           <p class="text-faded mb-5">Consultorias en cambios de marcas para empresas</p>
           <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubre más acá</a>
         </div>
       </div>
     </div>
   </header>

   <!-- About Section -->
   <section class="bg-primary" id="about">
     <div class="container">
       <div class="row">
         <div class="col-lg-8 mx-auto text-center">
           <h2 class="section-heading text-white">Nos dedicamos a potenciar tu marca</h2>
           <hr class="light my-4">
           <p class="text-faded mb-4">Desde hace más de 30 años, estamos junto a las empresas ayudándolas a definir su identidad.</p>
           <button class="btn btn-light btn-xl text-center"><a class="js-scroll-trigger" href="#services">Nuestros servicios</a></button>
         </div>
       </div>
     </div>
   </section>

   <!-- Services Section -->
   <section id="services">
     <div class="container">
       <div class="row">
         <div class="col-lg-12 text-center">
           <h2 class="section-heading">Nuestros servicios</h2>
           <hr class="my-4">
         </div>
       </div>
     </div>
     <div class="container">
       <div class="row">
         <div class="col-lg-3 col-md-6 text-center">
           <div class="service-box mt-5 mx-auto">
             <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
             <h3 class="mb-3">Branding y Consultoria</h3>
             <p class="text-muted mb-0">Desde la identidad visual hasta las garantías, ¿transmite la voz y la personalidad de su empresa de manera coherente.</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 text-center">
           <div class="service-box mt-5 mx-auto">
             <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
             <h3 class="mb-3">Creatividad y Desarrollo de Marca</h3>
             <p class="text-muted mb-0">Se puede usar un buen diseño, pero vamos más allá: Útil, accesible y diseñado teniendo en cuenta la filosofía de la marca.</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 text-center">
           <div class="service-box mt-5 mx-auto">
             <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
             <h3 class="mb-3">Marketing Digital</h3>
             <p class="text-muted mb-0">Un plan de marketing integrado, que se crea teniendo en cuenta el panorama general de tu negocio.</p>
           </div>
         </div>
         <div class="col-lg-3 col-md-6 text-center">
           <div class="service-box mt-5 mx-auto">
             <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
             <h3 class="mb-3">Contenido y Medios Sociales</h3>
             <p class="text-muted mb-0">Juega según sus reglas, teniendo una gran cantidad de contenido que atraiga a tus clientes hacia ti en su búsqueda.
             </p>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Portfolio Section -->
   <section class="p-0" id="portfolio">
     <div class="container-fluid p-0">
       <h2 class="section-heading text-center p-2">Últimos trabajos</h2>
       <hr class="my-4">
       <div class="row no-gutters popup-gallery">
         <?php
          $args = array(
            'post_type' => 'portfolio',
            'post_per_page' => 6,
            'order' => 'ASC',
            'category_name' => 'portafolio'
           );
           $portafolios = new WP_Query($args);
           while($portafolios->have_posts()): $portafolios->the_post();
         ?>
         
         <div class="col-lg-4 col-sm-6">
           <a class="portfolio-box" href="<?php the_post_thumbnail_url(); ?>">
            <?php the_post_thumbnail(); ?>
            <div class="portfolio-box-caption">
              <div class="portfolio-box-caption-content">
                <div class="project-category text-faded">
                  <?php the_title()?>
                </div>
                <div class="project-name">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          </a>
        </div>

          <?php endwhile; wp_reset_postdata(); ?>
        </div>
       </div>
   </section>

   <!-- Contact section -->
   <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-lg-8 mx-auto text-center">
           <h2 class="section-heading">Contáctanos</h2>
           <hr class="my-4">
           <p class="mb-5">¿Estás listo para darle vida a tu marca? Si lo estás, cuéntanos más en el siguiente formulario de contacto</p>
         </div>
       </div>
       <div class="row">
         <div class="col-lg-12">
           <?php echo do_shortcode('[contact-form-7 id="47" title="Formulario de contacto 1"]'); ?>
         </div>
         <div class="col-lg-4 ml-auto text-center">
           <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
           <p>+56 2 123 456 73</p>
         </div>
         <div class="col-lg-4 mr-auto text-center">
           <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
           <p>
             <a href="mailto:your-email@your-domain.com">contacto@dmark.com</a>
           </p>
         </div>
       </div>
     </div>
   </section>


<?php get_footer() ?>
