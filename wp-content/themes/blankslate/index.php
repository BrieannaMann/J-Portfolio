<?php get_header(); ?>
<h1>index.php</h1>
<section class="white-bkg lg-margin-bottom">
 <?php echo do_shortcode('[rev_slider alias="header_slider"]'); ?>
</section>
<!-- Case study section -->
<section class="white-bkg lg-margin-bottom">
<div class="med-padding" style="background: url('<?php echo get_template_directory_uri().'/assets/images/triangle dots.png'?>')">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between  med-padding-bottom m-direction-column">
    <div class="case-study-img flex direction-column justify-center med-margin m-width-100 ">
     <h1><?php the_field('case_study_title'); ?></h1>
     <p class="med-padding-bottom"><?php the_field('case_study_desc'); ?></p>
   </div>
   <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
     <a href="<?php the_field('image_1_link'); ?>"><img src="<?php the_field('case_study_image_1'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
   </div>
   <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
        <a href="<?php the_field('image_2_link'); ?>"><img src="<?php the_field('case_study_image_2'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
    </div>
    <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
         <a href="<?php the_field('image_3_link'); ?>"><img src="<?php the_field('case_study_image_3'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
     </div>
     <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
          <a href="<?php the_field('image_4_link'); ?>"><img src="<?php the_field('case_study_image_4'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
      </div>
      <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
           <a href="<?php the_field('image_5_link'); ?>"><img src="<?php the_field('case_study_image_5'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
       </div>
       <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
            <a href="<?php the_field('image_6_link'); ?>"><img src="<?php the_field('case_study_image_6'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
        </div>
        <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
             <a href="<?php the_field('image_7_link'); ?>"><img src="<?php the_field('case_study_image_7'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
         </div>
         <div class="case-study-img height-32 object-cover med-padding-bottom m-width-100">
              <a href="<?php the_field('image_8_link'); ?>"><img src="<?php the_field('case_study_image_8'); ?>" class=" object-cover med-padding-bottom m-width-100"></a>
          </div>

</div>
</div>
</div>
</section>
<!-- End of Case study section -->
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
