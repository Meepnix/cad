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
        <h1>News</h1>
        <hr>
        <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    the_post();
                    echo '<div style="margin-bottom: 10px;">';
                    echo '<h4>' . get_the_title() . '</h4>';
                    echo '<small style="background-color: #D4E5EF;">' .  get_the_date() . '</small>';
                    echo '</div>';

                    the_content();
                    echo '<hr style="border-top: 1px solid #343a40;">';
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

