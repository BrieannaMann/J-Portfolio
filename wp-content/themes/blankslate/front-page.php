<?php get_header(); ?>
<h1>frontpage.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
 <?php echo do_shortcode('[rev_slider alias="header_slider"]'); ?>
</section>
<!-- End Of Project slider -->
<!-- About section -->
<section class="white-bkg lg-margin-bottom" >
<div class="about-padding" style="background: url('<?php echo get_template_directory_uri().'/assets/images/Oval BG.png'?>')">
  <div class="flex lg-padding-bottom m-direction-column">
    <div class="width-25 flex direction-column justify-center med-padding-bottom m-width-100">
      <h1 class=""><?php the_field('about_title'); ?></h1>
      <p class="med-padding-bottom"><?php the_field('about_description'); ?></p>
      <a href="#" class="view-all-btn black-link "> LEARN MORE </a>
    </div>
    <div class="width-75 m-width-100">
      <p class="med-padding-bottom"><?php the_field('about_content'); ?></p>
      <a href="#" class="resume-btn black-link black-btn-border"> View Resume </a>
    </div>
  </div>
  <div class="flex m-direction-column">
    <div class="med-margin">
      <img src="<?php the_field('about_icon_1'); ?>" class="bject-cover med-padding-bottom width-auto">
      <p><?php the_field('about_text_1'); ?></p>
    </div>
    <div class="med-margin">
      <img src="<?php the_field('about_icon_2'); ?>" class="object-cover med-padding-bottom width-auto">
      <p><?php the_field('about_text_2'); ?></p>
    </div>
    <div class="med-margin">
      <img src="<?php the_field('about_icon_3'); ?>" class="object-cover med-padding-bottom width-auto">
      <p><?php the_field('about_text_3'); ?></p>
    </div>
  </div>
</div>
</section>
<!-- End of About section -->

<!-- Case study section -->
<section class="white-bkg lg-margin-bottom">
<div class="med-padding" style="background: url('<?php echo get_template_directory_uri().'/assets/images/triangle dots.png'?>')">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between  med-padding-bottom m-direction-column">
    <div class="case-study-img flex direction-column justify-center med-margin m-width-100 ">
     <h1><?php the_field('case_study_title'); ?></h1>
     <p class="med-padding-bottom"><?php the_field('case_study_desc'); ?></p>
     <a href="#"  class="view-all-btn black-link "> View All </a>
   </div>

     <img src="<?php the_field('case_study_image_1'); ?>" class="case-study-img height-32 object-cover med-padding-bottom m-width-100">

     <img src="<?php the_field('case_study_image_2'); ?>" class="case-study-img height-32 object-cover med-padding-bottom m-width-100">

     <img src="<?php the_field('case_study_image_3'); ?>" class="case-study-img height-32 object-cover med-padding-bottom m-width-100">

     <img src="<?php the_field('case_study_image_4'); ?>" class="case-study-img height-32 object-cover med-padding-bottom m-width-100">

     <img src="<?php the_field('case_study_image_5'); ?>" class="case-study-img height-32 object-cover med-padding-bottom m-width-100">

</div>
</div>
</div>
</section>
<!-- End of Case study section -->

<section class="white-bkg lg-margin-bottom">

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
</section>
<?php get_footer(); ?>
