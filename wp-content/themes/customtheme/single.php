<?php
/**
 * The template for displaying the posts
 *
 *
 * @package CustomTheme
 * @subpackage Custom Theme 1.0
 
 */
?>

<?php get_header(); ?>

<div class="container text-center">
    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                  <h1><?php the_title(); ?></h1>
                  <?php the_content(); ?>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- row -->
</div><!-- container -->
         
<?php get_footer(); ?>