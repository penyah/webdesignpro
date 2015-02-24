<?php 

/*
Template Name: Dashboard pages
*/

get_template_part( 'for-dashboard/header'); 

 ?>
<section id="page">
<div class="container" style="min-height:600px;">
<div class="row">
    <div id="content" class="site-content" role="main">
        <?php /* The loop */ ?>
            <?php while ( have_posts() ) { the_post(); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div> 
            <?php } ?>
    </div><!-- #content -->
</div>
</div>
</section>



<?php get_footer();