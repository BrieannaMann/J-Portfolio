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


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<nav id="menu" role="navigation">
  <div class="flex align-items-center justify-between lg-padding white-bkg">
    <img src="<?php echo get_template_directory_uri().'/assets/images/Julie-Logo.png'?>" alt="logo">
    <?php wp_nav_menu(); ?>
  </div>
</nav>
</header>
<div id="container">
