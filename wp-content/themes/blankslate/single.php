<?php get_header(); ?>
<h1>single.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
  <div class="xlg-padding flex">
    <div><?php echo do_shortcode( '[rev_slider alias="'.get_field('hero_slider').'"]' ); ?></div>
</div>
</section>
<!-- End Of Project slider -->


<!-- project info section -->
<section class="white-bkg lg-margin-bottom">
<div class="project-padding">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between m-direction-column">
    <div class="width-32 med-padding-right justify-between flex direction-column m-width-100">
      <div>
       <h1><?php the_field('study_title'); ?></h1>
       <p><?php the_field('title_sub_title'); ?></p>
     </div>
     <div>
       <p class="bold-font"><?php the_field('my_role_title'); ?></p>
       <p><?php the_field('role_desc'); ?></p>
       <p class="bold-font med-padding-top"><?php the_field('tools_title'); ?></p>
       <p><?php the_field('tools_desc'); ?></p>
    </div>
   </div>
    <div class="width-60 m-width-100">
      <p><?php the_field('project_desc'); ?></p>
    </div>
</div>
</div>
</div>
</section>
<!-- End of project info section -->
<!-- Work flow slider -->
<section class="white-bkg lg-margin-bottom">
  <div class="about-padding flex flex-wrap" style="background: url('<?php echo get_template_directory_uri().'/assets/images/Oval BG.png'?>')">
    <!-- ROW 1 -->
  <div class="width-75 sm-width-100">
    <div class="green-bkg">
       <img src="<?php the_field('persona_image'); ?>">
    </div>
  </div>

  <!-- ROW 4 -->
  <div class="width-25 sm-width-100">
    <div class="med-padding-left">
      <h2><?php the_field('persona_title'); ?></h2>
      <p><?php the_field('persona_desc'); ?></p>
    </div>
  </div>
</div>
</div>
  <div>
</section>
<!-- End of work flow slider -->
<!-- Project Slider -->
<section class="white-bkg lg-margin-bottom">

  <div><?php echo do_shortcode( '[rev_slider alias="'.get_field('project_slider').'"]' ); ?></div>
</section>
<!-- End of Project Slider -->
<!-- Take away section -->
<section class="white-bkg lg-margin-bottom">
<div class="project-padding">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between">
    <div class="width-32 m-width-100">
     <img src="<?php the_field('take_away_image'); ?>">
   </div>
    <div class="width-60 m-width-100 lg-padding-left">
      <p class="bold-font"><?php the_field('take_away_title'); ?></p>
      <p><?php the_field('take_away_desc'); ?></p>
    </div>
</div>
</div>
</div>
</section>
<!-- End of Take away section -->

<section class="white-bkg lg-margin-bottom">


</section>
<?php get_footer(); ?>
