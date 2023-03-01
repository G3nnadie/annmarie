<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
    <meta name="keywords" content="" />

    <meta property="og:site_name" content="Carole Mahoney | Keynote Speaker"/>

    <meta property="og:locale" content="en_US"/>
    
    <meta property="og:type" content="website"/>
    
    <?php if ( is_front_page() ) :?>
      
    <title>Dr. Caroline Niederman | Keynote Speaker</title>

    <meta property="og:title" content="Dr. Caroline Niederman | Keynote Speaker"/>

    <meta name="description" content="On a mission to help healthcare providers develop a consistent and effective way to work with the uncertainty of invisible illnesses like Chronic Fatigue Syndrome (CFS)" />

    <meta property="og:description" content="On a mission to help healthcare providers develop a consistent and effective way to work with the uncertainty of invisible illnesses like Chronic Fatigue Syndrome (CFS)"/>

    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-dark.svg"/>


    <?php elseif ( is_page( 'Keynote' ) ) :?>
    
    <title>Carole Mahoney | Keynote</title>
    
    <meta property="og:title" content="Carole Mahoney | Keynote"/>

    <meta name="description" content="Keynotes that transform how audiences approach sales" />

    <meta property="og:description" content="Keynotes that transform how audiences approach sales"/>

    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/images/keynote/fb-share.jpg"/>

    <?php elseif ( is_page( 'Books' ) ) :?>
    
    <title>Carole Mahoney | Books</title>
    
    <meta property="og:title" content="Carole Mahoney | Books"/>

    <meta name="description" content="Carole’s books clearly outlines and articulates how you can close leads consistently and make the world a better place while doing it." />

    <meta property="og:description" content="Carole’s books clearly outlines and articulates how you can close leads consistently and make the world a better place while doing it."/>

    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/images/books/fb-share.png"/>

    <?php elseif ( is_page( 'Resources' ) ) :?>
    
    <title>Carole Mahoney | Resources</title>
    
    <meta property="og:title" content="Carole Mahoney | Resources"/>

    <meta name="description" content="Don’t worry about selling this keynote to your audience. Carole has you covered with intros, summaries and media for all your needs!" />

    <meta property="og:description" content="Don’t worry about selling this keynote to your audience. Carole has you covered with intros, summaries and media for all your needs!"/>

    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/images/resources/fb-share-resources.jpg"/>
    
    <?php else: ?>
      
    <title><?php wp_title('');echo' | ';bloginfo('name'); ?></title>

    <meta name="description" content="<?php if ( is_single() ) {
          single_post_title('', true); 
      } else {
          bloginfo('name'); echo " | "; bloginfo('description');
      }
      ?>" />

      
    <meta name="og:description" content="<?php if ( is_single() ) {
          single_post_title('', true); 
      } else {
          bloginfo('name'); echo " | "; bloginfo('description');
      }
      ?>" />

    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/assets/images/fb-share.jpg"/>
    
    <?php endif; ?>

    <meta property="og:url" content="<?php the_permalink(); ?>"/>

    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-dark.svg" sizes="16x16" />


     <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/ion2wbs.css">
    <!-- Fonts END -->

    <!-- Libs -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/libs/swiper/swiper.min.css">
    <!-- Libs END -->

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/grid.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/media.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.flashy.min.js"></script>
    


    <script type="text/javascript">
      /*jQuery(document).ready(function($) {

        $('#prime-nav ul li a ').addClass('nav-link');
        $('#prime-nav ul li').addClass('nav-item nav-item-outline');

        $(".contact-item a").attr("data-toggle", "modal").addClass('custom-btn');
        
      });*/
    </script>
</head>