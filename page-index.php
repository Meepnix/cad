<?php
/**
* Template Name: CAD Homepage
*
* @package WordPress
* @subpackage cad
* @since cad 0.1
*/
?>



<?php get_header(); ?>

<!-- Meta Slider Main -->
<?php echo do_shortcode('[metaslider title="Main"]'); ?>


<div class="container-fluid" id="banner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/town.jpg');">
    <div class="container">

        <div class="row">
            <div class="col text-center">
                

                <div class="card bg-sky-trans" style="margin-top: 300px; margin-bottom: 300px;">
                    <div class="card-body">

                        <h2 class="card-text">Darlington Citizens Advice is an independent local charity, run by local people for the benefit of local people.</h2>
                        
                        <p class="card-text about">We aim to provide the advice people need for the problems they face and improve the policies and practices that affect people's lives.</p>
                        <p class="card-text about">We provide free, independent, confidential and impartial advice to everyone on their rights and responsibilities. We value diversity, promote equality and challenge discrimination.</p>
                        
                    </div>
                </div>
                        
            </div>
        </div>
        <hr>
    </div>
</div>

<div class="container section">

    <div class="row">
        <div class="col text-center">
            <h2 style="margin-bottom: 40px;">Latest News</h2>


            <div class="card-deck">

                <?php  

                $custom_loop = new WP_Query('showposts=4&orderby=date');  

                if ( $custom_loop->have_posts() ) :  
                    while ( $custom_loop->have_posts() ) : 
                        $custom_loop->the_post();  
                        echo '<div class="card" style="background-color: #D4E5EF;">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h5>';
                        echo '<p class="card-text"><small class="text-muted">' . get_the_date() . '</small></p>';  
                        echo '<p class="card-text">' . get_the_excerpt() . '</p>';  
                        echo '<a href="' . get_permalink() . '" class="btn btn-cad">Read More</a>';  
                        echo '</div>';
                        echo '</div>';
                    endwhile;  

                    wp_reset_query();  
                endif;  

                ?>
            </div>
            <br>
            <a href="#" class="btn btn-cad" style="margin-bottom: 20px"><strong>More News</strong></a>
            

        </div>
    </div>

    <div class="row">



    </div>
    

</div>

<!-- Meta Slider Services -->
<div class="container-fluid bg-sky-grad section">
    <div class="container">
        <div class="col text-center">
            <h2 style="margin-bottom: 40px;">Our Services</h2>
        </div>
    </div>
    

    <?php echo do_shortcode('[metaslider title="Services"]'); ?>

</div>

<div class="container-fluid section" id="vol-banner" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/volunteer_banner.jpg');">
    <div class="container">
        <div class="row py-4">
        </div>
        

        <div class="row">
            <div class="col">
                <div class="card" style="background-color: #D4E5EF;">
                    <div class="card-body">
                        <h2 class="card-title">Help Us?</h2>
                        <p class="card-text about">Volunteers are at the heart of our service helping thousands of residents and workers of Darlington each year, providing them Advice, Information and Advocacy. <br> We also welcome a donation or fundraising, any support you can provide will be hugely appreciated and will go towards the continued delivery of our services.</p>
                        <a href="#" class="btn btn-cad">Find out more</a>
                    </div>
                </div>
                    
            </div>
            <div class="col text-center">

                

            </div>
        </div>

        <div class="row py-4">
        </div>
    </div>

        
    </div>

</div>

<?php get_footer(); ?>