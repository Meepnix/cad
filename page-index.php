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
<h1> Home page</h1>
    

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