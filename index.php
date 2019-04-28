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
    
    <div class="row">
        <div class="col-9">
        <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    the_post();
                    echo '<h2>' . get_the_title() . '</h2>';
                    echo '<p>' .  get_the_date() . 'by <a href="#">' . get_the_author() . '</a></p>';
                    the_content();
                endwhile; 

            else: 
        ?>
                <p>Sorry, no posts matched your criteria.</p>

        
                <?php endif; ?>
        </div>
        <div class="col-3">

            <?php get_sidebar(); ?>
            
        </div>
        
    </div>
</div>

<?php get_footer(); ?>

