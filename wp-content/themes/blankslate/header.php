<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Julie Service | Web Designer | UI/UX</title>
<meta name="description" content="Julie Service is a Web and UI/UX Designer working out of Toronto, ON.">
<meta name="keywords" content="Julie Service UI UX Design Designer Web Toronto">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/assets/css/responsive.css'?>" />
<!-- google font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600|Noto+Serif:400,700" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<nav id="menu" role="navigation" class="desktop">
  <div class="flex align-items-center justify-between lg-padding white-bkg">
    <a href="<?php echo get_template_directory_uri().'/home'?>">
      <img src="<?php echo get_template_directory_uri().'/assets/images/Julie-Logo.png'?>" alt="logo">
    </a>
    <?php wp_nav_menu(); ?>
  </div>
</nav>
<nav id="menu" role="navigation" class="mobile">
  <div class="flex align-items-center justify-between lg-padding white-bkg">
    <a href="<?php echo get_template_directory_uri().'/home'?>">
      <img src="<?php echo get_template_directory_uri().'/assets/images/Julie-Logo.png'?>" alt="logo">
    </a>
    <div>
    <div class="container" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <div id="hello" class="hide">
      <?php wp_nav_menu(); ?>
    </div>
  </div>
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
        var x = document.getElementById("hello");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }
    </script>
  </div>
</nav>
</header>
<div id="container">
