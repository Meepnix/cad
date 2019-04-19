<?php get_header(); ?>

<!-- Breadcrumb -->
<div class="container">

    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
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