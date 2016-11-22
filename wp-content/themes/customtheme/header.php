<?php
/**
 * The template for displaying the header
 *
 *
 * @package CustomTheme
 * @subpackage Custom Theme 1.0
 
 */
?>

<!doctype html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?><!-- A necessary hook, especially for use by most plugins-->
    </head>
        <body <?php body_class(); ?>>
        <nav class="navbar gradient-bg main-custom-nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/')); ?>"><?php bloginfo( 'name' ) ?></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class' => 'primary-menu',
                                'container' => false,
                                'items_wrap' => '%3$s'
                            ));
                        ?>
                    </ul>
                </div>
            </div><!-- container-fluid -->
        </nav>