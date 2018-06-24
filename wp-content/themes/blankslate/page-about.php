<?php get_header(); ?>
<h1>page-about.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
  <div class="lg-padding flex sm-direction-column-reverse">
  <div class="flex direction-column justify-center lg-padding-right">
  <h1 class="grey-font">I'm</h1>
  <h1 class="secondary-color-font lg-padding-bottom">Julie Service</h1>
  <p><?php the_field('header_desc'); ?></p>
  </div>
  <img  src="<?php the_field('header_image'); ?>" class="width-50 object-cover sm-width-100"/>
</div>
</section>
<!-- End Of Project slider -->
<!-- Bio section -->
<section class="white-bkg lg-margin-bottom" >
<div class="lg-padding">
  <div class="flex m-direction-column">
    <div class="width-30 flex direction-column justify-center m-width-100">
      <div>
      <h1 class="lg-padding-bottom"><?php the_field('bio_and_credentials_title'); ?></h1>
      </div>
      <div>
      <p class="bold-font"><?php the_field('bio_cred_title_1'); ?></p>
      <p class="med-padding-bottom"><?php the_field('bio_cred_text_1'); ?></p>
      <p class="bold-font"><?php the_field('bio_cred_title_2'); ?></p>
      <p class="med-padding-bottom"><?php the_field('bio_cred_text_2'); ?></p>
      <p class="bold-font"><?php the_field('bio_cred_title_3'); ?></p>
      <p class="med-padding-bottom"><?php the_field('bio_cred_text_3'); ?></p>
    </div>
    </div>
    <div class="width-70 lg-padding-left m-width-100 m-no-padding">
      <p class="med-padding-bottom"><?php the_field('bio_cred_desc'); ?></p>
      <a href="#" class="resume-btn black-link black-btn-border"> View Resume </a>
    </div>
  </div>
</div>
</section>
<!-- End of About section -->

<!-- Skills section -->
<section class="white-bkg lg-margin-bottom">
<div class="lg-padding">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between ">
    <div class="width-32 lg-padding-bottom m-width-50 sm-width-100 ">
     <h1><?php the_field('skills_title'); ?></h1>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom m-width-50 sm-width-100">
     <div class="lg-padding-right">
     <div class="flex">
       <img src="<?php the_field('skill_1_image'); ?>" class="width-auto object-contain med-padding-bottom">
        <h2 class="med-padding-left"><?php the_field('skill_1_title'); ?></h2>
      </div>
        <p><?php the_field('skill_1_desc'); ?></p>
      </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom m-width-50 sm-width-100">
     <div class="lg-padding-right">
    <div class="flex">
     <img src="<?php the_field('skill_2_image'); ?>" class="width-auto object-contain med-padding-bottom">
      <h2 class="med-padding-left"><?php the_field('skill_2_title'); ?></h2>
   </div>
     <p><?php the_field('skill_2_desc'); ?></p>
   </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom m-width-50 sm-width-100">
     <div class="lg-padding-right">
     <div class="flex">
     <img src="<?php the_field('skill_3_image'); ?>" class="width-auto object-contain med-padding-bottom">
      <h2 class="med-padding-left"><?php the_field('skill_3_title'); ?></h2>
   </div>
      <p><?php the_field('skill_3_desc'); ?></p>
    </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom m-width-50 sm-width-100">
     <div class="lg-padding-right">
    <div class="flex">
     <img src="<?php the_field('skill_4_image'); ?>" class="width-auto object-contain med-padding-bottom">
     <h2 class="med-padding-left"><?php the_field('skill_4_title'); ?></h2>
   </div>
     <p><?php the_field('skill_4_desc'); ?></p>
   </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom m-width-50 sm-width-100">
     <div class="lg-padding-right">
     <div class="flex">
     <img src="<?php the_field('skill_5_image'); ?>" class="width-auto object-contain med-padding-bottom">
     <h2 class="med-padding-left"><?php the_field('skill_5_title'); ?></h2>
   </div>
     <p><?php the_field('skill_5_desc'); ?></p>
   </div>
   </div>
</div>
</div>
</div>
</section>
<!-- End of Case study section -->

<!-- Start of Photo Section -->
<section class="white-bkg lg-margin-bottom">
  <div class="lg-padding-top lg-padding-bottom m-no-padding flex justify-center person-image-section width-100">
    <div class="person-image-1">
      <img height="400" width="100%" src="<?php the_field('personal_image_1'); ?>" class="main-personal-image sm-padding-right">
    </div>
    <div class="flex person-image-2">
      <img height="199" width="100%" src="<?php the_field('personal_image_2'); ?>" class="personal-image sm-padding-right">
      <img height="199" width="100%" src="<?php the_field('personal_image_3'); ?>" class="personal-image sm-padding-right">
    </div>
  </div>
</section>
<!-- End of Photo section -->
<!-- Start of Form -->
<section class="white-bkg lg-margin-bottom">
<div class="med-padding flex m-direction-column" style="background: url('<?php echo get_template_directory_uri().'/assets/images/triangle dots.png'?>')">
  <div class="width-50 flex justify-center direction-column med-padding">
    <h1 class="sm-padding-bottom">Contact</h1>
    <p class="med-padding-bottom">Like what you see? Holla at your girl.</p>
    <p>519-282-6185<br>
    <a class="email-link" href="mailto:juliesrvc@gmail.com">juliesrvc@gmail.com</a></p>
    <div class="flex">
      <i class="fab fa-instagram grey-font med-padding-top med-padding-right"></i>
      <i class="fab fa-twitter grey-font med-padding"></i>
      <i class="fab fa-linkedin grey-font med-padding"></i></div>

  </div>
  <div class="width-50">
    <?php   echo do_shortcode( '[contact-form-7 id="5" title="Contact Me"]' );?>
  </div>
</div>
</section>
<!-- End of Form -->

<?php get_footer(); ?>
