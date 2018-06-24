<?php get_header(); ?>
<h1>single.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
  <div class="xlg-padding flex">
  <img class="width-100 object-cover" src="<?php the_field('hero_image'); ?>"/>
</div>
</section>
<!-- End Of Project slider -->
<!-- Bio section -->
<section class="white-bkg lg-margin-bottom" >
<div class="xlg-padding">
  <div class="flex ">
    <div class="width-30 flex direction-column justify-center ">
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
    <div class="width-70 lg-padding-left">
      <p class="med-padding-bottom"><?php the_field('bio_cred_desc'); ?></p>
      <a href="#" class="resume-btn black-link black-btn-border"> View Resume </a>
    </div>
  </div>
</div>
</section>
<!-- End of About section -->

<!-- Skills section -->
<section class="white-bkg lg-margin-bottom">
<div class="xlg-padding">
  <div class="sm-padding">
  <div class="flex flex-wrap space-between">
    <div class="width-32 ">
     <h1><?php the_field('skills_title'); ?></h1>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom">
     <div class="lg-padding-right">
     <div class="flex">
       <img src="<?php the_field('skill_1_image'); ?>" class="width-auto object-cover med-padding-bottom">
        <h2 class="med-padding-left"><?php the_field('skill_1_title'); ?></h2>
      </div>
        <p><?php the_field('skill_1_desc'); ?></p>
      </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom">
     <div class="lg-padding-right">
    <div class="flex">
     <img src="<?php the_field('skill_2_image'); ?>" class="width-auto object-cover med-padding-bottom">
      <h2 class="med-padding-left"><?php the_field('skill_2_title'); ?></h2>
   </div>
     <p><?php the_field('skill_2_desc'); ?></p>
   </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom">
     <div class="lg-padding-right">
     <div class="flex">
     <img src="<?php the_field('skill_3_image'); ?>" class="width-auto object-cover med-padding-bottom">
      <h2 class="med-padding-left"><?php the_field('skill_3_title'); ?></h2>
   </div>
      <p><?php the_field('skill_3_desc'); ?></p>
    </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom">
     <div class="lg-padding-right">
    <div class="flex">
     <img src="<?php the_field('skill_4_image'); ?>" class="width-auto object-cover med-padding-bottom">
     <h2 class="med-padding-left"><?php the_field('skill_4_title'); ?></h2>
   </div>
     <p><?php the_field('skill_4_desc'); ?></p>
   </div>
   </div>
   <div class="width-32 flex direction-column justify-center lg-padding-bottom">
     <div class="lg-padding-right">
     <div class="flex">
     <img src="<?php the_field('skill_5_image'); ?>" class="width-auto object-cover med-padding-bottom">
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

<section class="white-bkg lg-margin-bottom">

<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
</section>
<?php get_footer(); ?>
