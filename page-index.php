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

<!-- Meta Slider -->
<?php echo do_shortcode('[metaslider title="New Slideshow"]'); ?>


<div class="container">
    <div class="row">
        <div class="col">
            <h2>Welcome to Citizens Advice Darlington</h2>
            <p>Citizens Advice Darlington is an independent local charity, run by local people for the benefit of local people.</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2>Latest News</h2>


        <div class="card-deck">

            <?php  

            $custom_loop = new WP_Query('showposts=3&orderby=date');  

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

        </div>
    </div>
    

    <?php 

    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();
            the_content();
        endwhile; 
    
    else: 
    ?>
    <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>

</div>

<?php get_footer(); ?>