<?php get_header(); ?>
<h1>single.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
  <div class="xlg-padding flex">
  <img class="width-100 object-cover" src="<?php the_field('hero_image'); ?>"/>
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
  <div class="width-25 m-width-50 sm-width-100">
    <img src="<?php the_field('user_image'); ?>" width="100%;">
    <div class="green-bkg">
      <p class="white-font bold-font"><?php the_field('user_info'); ?></p>
    </div>
  </div>


    <!-- ROW 2 -->
    <div class="width-25 m-width-50 sm-width-100">
      <div class="med-padding-left">
      <!-- Biography -->
    <div>
      <img src="<?php the_field('bio_icon'); ?>">
      <h5><?php the_field('biography_title'); ?></h5>
      <div><?php the_field('biography_desc'); ?></div>
    </div>
    <!-- Motivations -->
    <div>
      <img src="<?php the_field('motivation_icon'); ?>">
      <h5><?php the_field('motivation_title'); ?></h5>
      <div><?php the_field('motivation_desc'); ?></div>
    </div>
    <!-- Goals -->
    <div>
      <img src="<?php the_field('goals_icon'); ?>">
      <h5><?php the_field('goals_title'); ?></h5>
      <div><?php the_field('goals_desc'); ?></div>
    </div>
    <!-- Fustrations -->
    <div>
      <img src="<?php the_field('frustrations_icon'); ?>">
      <h5><?php the_field('frustrations_title'); ?></h5>
      <div><?php the_field('frustrations_desc'); ?></div>
    </div>
    <!-- Top Deciding Factors -->
    <div>
      <img src="<?php the_field('deciding_factors_icon'); ?>">
      <h5><?php the_field('deciding_factors_title'); ?></h5>
      <div class="green-bkg" style="width:<?php the_field('atmosphere_percent'); ?>;"><p class="white-font">Hello </p></div>
      <div class="green-bkg" style="width:<?php the_field('price_percent'); ?>;"><p class="white-font">Hello </p></div>
      <div class="green-bkg" style="width:<?php the_field('location_percent'); ?>;"><p class="white-font">Hello </p></div>
      <div class="green-bkg" style="width:<?php the_field('good_reviews_percent'); ?>;"><p class="white-font">Hello </p></div>
      <div class="green-bkg" style="width:<?php the_field('convenience_percent'); ?>;"><p class="white-font">Hello </p></div>
    </div>
  </div>
</div>
  <!-- ROW 3 -->
  <div class="width-25 m-width-50 sm-width-100">
    <div class="med-padding-left">
    <div class="green-bkg">
      <p><?php the_field('quote'); ?></p>
    </div>
    <div>
      <!-- Words to Describe -->
    <div>
      <img src="<?php the_field('describe_words_icon'); ?>">
      <h5><?php the_field('describe_words_title'); ?></h5>
      <div><?php the_field('describe_words_desc'); ?></div>
    </div>
    <!-- Brands -->
    <div>
      <img src="<?php the_field('brand_icon'); ?>">
      <h5><?php the_field('brand_title'); ?></h5>
      <img src="<?php the_field('brand_images'); ?>">
    </div>
  </div>
  </div>
</div>
  <!-- ROW 4 -->
  <div class="width-25 m-width-50 sm-width-100">
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
 <?php echo do_shortcode('[rev_slider alias="Explore_project"]'); ?>
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
    <div class="width-60 m-width-100">
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
