<?php
/**
 * The template for displaying the index page
 *
 *
 * @package CustomTheme
 * @subpackage Custom Theme 1.0
 
 */
?>

<?php get_header(); ?>

<div class="jumbotron gradient-bg margin-neg-20">
    <div class="container">
        <h1>Welcome to my custom site</h1>
    </div>
</div>
<div class="container text-center">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <h2>A single blog post</h2>
          <?php the_title(); ?>
          <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
 </div>
         
<?php get_footer(); ?>         
