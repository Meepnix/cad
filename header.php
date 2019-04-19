<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Citizens Advice Darlington</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        

        <?php wp_head();?>
    </head>

    <body>
    
    <div class="container-fluid" style="background-color: #D4E5EF;">

        <div class="row">
            <div class="col">
      
            </div>
            <div class="col-10">

            <!-- Logo -->
            <?php 
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>

            
            <a class="navbar-brand" href="#"><img src="<?php echo $image[0]; ?>" alt=""></a>
      
            </div>
            <div class="col">
      
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
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
	        </div>
        </nav>