<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Citizens Advice Darlington helps people resolve their legal, money and other problems by providing free, independent and confidential advice, and by influencing policymakers.">
        <meta name="author" content="Darlington Citizens Advice">

        <title>Darlington Citizens Advice</title>

        
      
        <?php wp_head();?>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Theme stylesheet -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

        <!-- Theme Prod stylesheet -->
        <link href="<?php echo get_bloginfo('template_directory'); ?>/style-290519.css" rel="stylesheet">

        <!-- Open Sans stylesheet -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Leafletjs -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>

        <!-- Cookie Consent -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>

        <?php
          if (is_front_page()){
            echo '<!-- AOS -->';
            echo '<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">';
}

        ?>



        
        <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#3c404d",
              "text": "#d6d6d6"
            },
            "button": {
              "background": "#8bed4f"
            }
          },
          "theme": "edgeless",
          "content": {
            "message": "We only use necessary cookies strictly for the functionality of this website."
          }
        })});
        </script>
        
    </head>

    <body>
    
    <div class="container-fluid bg-sky">

        <div class="row">
            <div class="col-1">
      
            </div>
            <div class="col-6">

                <!-- Logo -->
                <?php 
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                ?>

                
                <a class="navbar-brand" href="<?php echo get_home_url();?>"><img id="logo" src="<?php echo $image[0]; ?>" alt=""></a>
      
            </div>
           
            
            <div class="col-5">

                <div class="social">

                    <a href="<?php echo get_page_link(228);?>" class="btn btn-donate">DONATE</a>

                    <a href="http://facebook.com/darlingtoncab" title="Follow us on Facebook." target="_blank">
                    <i class="fab fa-facebook fa-3x"></i>
                    </a>

                    <a href="http://twitter.com/darlingtoncab" title="Follow us on Twitter." target="_blank">
                    <i class="fab fa-twitter-square fa-3x"></i>
                    </a>

                    <a href="https://www.instagram.com/darlingtoncad" title="Follow us on Instagram." target="_blank">
                    <i class="fab fa-instagram fa-3x"></i>
                    </a>


                </div>
                
                    
                
                
            </div>
        </div>
               
    </div>

        <nav class="navbar sticky-top navbar-expand-md navbar-dark" style="background-color: #004B88;" role="navigation">
            <div class="container">
                
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		            <span class="navbar-toggler-icon"></span>
	            </button>

	            
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav header-menu',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
	        </div>
        </nav>