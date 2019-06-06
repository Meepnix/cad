<?php get_header(); ?>

<?php

    if ( get_the_post_thumbnail_url() ) {


        echo '<div class="container-fluid page-banner" style="background-image: url('. get_the_post_thumbnail_url() . ');">';

        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-9">';
                    echo '<div class="title-sky-trans-right">';
                        echo '<h1>' . get_the_title() . '</h1>';
                    echo '</div>';
                echo '</div>';
                echo '<div class="col-3">';


                echo '</div>';
            echo '</div>';


        echo '</div>';

    echo '</div>';

    }
?>
    


   




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
        <div class="col-9 page">

            <?php 

            if ( have_posts() ) : 
                while ( have_posts() ) : 
                    the_post();
                    if (!get_the_post_thumbnail_url())
                    {
                        echo '<h1>' . get_the_title() . '</h1>';
                        echo '<hr>';
                        
                    }
                    
                    the_content();
                endwhile; 
            
            else: 
            ?>
            <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

        </div>
        
        <div class="col-3">

            <?php wpb_list_child_pages(); ?>
        </div>


    </div>

</div>

<?php get_footer(); ?>