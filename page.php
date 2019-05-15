<?php get_header(); ?>

<!-- Breadcrumb -->
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>

</div>
<div class="container">

    <?php 

    if ( have_posts() ) : 
        while ( have_posts() ) : 
            the_post();
            echo '<h1>' . get_the_title() . '</h1>';
            echo '<hr style="border-color: #004B88;">';
            the_content();
        endwhile; 
    
    else: 
    ?>
    <p>Sorry, no posts matched your criteria.</p>

    <?php endif; ?>

</div>

<?php get_footer(); ?>