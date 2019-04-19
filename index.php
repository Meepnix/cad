<?php get_header(); ?>
<!-- Meta Slider -->
<?php echo do_shortcode('[metaslider title="New Slideshow"]'); ?>
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-sm">
                    One of three columns
                </div>
                <div class="col-sm">
                    One of three columns
                </div>
                <div class="col-sm">
                    One of three columns
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


<?php get_footer(); ?>

