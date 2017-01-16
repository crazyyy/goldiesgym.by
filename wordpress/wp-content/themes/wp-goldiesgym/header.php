<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
  <?php if ( !is_front_page() && !is_home() ){ ?>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>//css/inner-pages.css' media='all' />
  <?php } ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">
  <div class="header-bg">
    <header class="header">
      <div class="h-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 col-md-6 h-top__left">
              <p><i class="ic ic-w_marker"></i>ул. Клары Цеткин, 51а <a href="#map">смотреть на карте</a></p>
            </div>
            <div class="col-sm-7 col-md-6 h-top__right">
              <div class="h-top__socials">
                <a href="#"><i class="ic ic-fb"></i></a>
                <a href="#"><i class="ic ic-vk"></i></a>
                <a href="#"><i class="ic ic-in"></i></a>
              </div>
              <div class="h-top__phone">
                <p>
                  <i class="ic ic-w_phone"></i>
                  <span><small>+375 (29)</small> 5064707</span>
                </p>
                <a class="btn-recall" href="#">заказать звонок</a>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div><!-- end h-top -->

      <div class="h-bot">
        <div class="container">
          <div class="row">
            <div class="hamburger hamburger--elastic">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
            <?php wpeHeadNav(); ?>
          </div>
        </div>
      </div><!-- end h-bot -->
      <div class="logo">
        <?php if ( !is_front_page() && !is_home() ){ ?>
          <a href="<?php echo home_url(); ?>">
        <?php } ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
        <?php if ( !is_front_page() && !is_home() ){ ?>
          </a>
        <?php } ?>
      </div><!-- /logo -->
    </header>
