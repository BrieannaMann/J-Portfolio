<?php get_header(); ?>
<h1>page-contact.php</h1>
<!-- Project slider -->
<section class="white-bkg lg-margin-bottom">
 <?php echo do_shortcode('[slide-anything id="6"]'); ?>
</section>
<!-- End Of Project slider -->
<!-- Start of Form -->
<section class="white-bkg lg-margin-bottom">
<div class="lg-padding flex m-direction-column" style="background: url('<?php echo get_template_directory_uri().'/assets/images/triangle dots.png'?>')">
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
