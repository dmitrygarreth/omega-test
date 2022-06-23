<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ogema_test
 */

$welcome_section_background = get_field('welcome_section_background');
$welcome_section_title = get_field('welcome_section_title');
$welcome_section_desc = get_field('welcome_section_desc');
$welcome_section_link = get_field('welcome_section_link');
$welcome_section_link_text = get_field('welcome_section_link_text');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="mobile-menu__background"> </div>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header" style="background-image: url(<?php echo $welcome_section_background; ?>);">
        <div class="site-header__container">
            <div class="site-header__content">
                <div class="wrapper">
                    <div class="row v-center">
                        <div class="site-branding col-variable-width">
                            <?php the_custom_logo(); ?>
                        </div><!-- .site-branding -->

                        <div class="show-desc">
                            <nav id="site-navigation" class="main-navigation col-variable-width">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                                ?>
                            </nav><!-- #site-navigation -->
                        </div>

                        <div class="show-mobile">
                            <div class="show-mobile__menu-icon col-variable-width">
                                <i class="lni lni-menu"></i>
                            </div>
                            <nav id="site-navigation" class="show-mobile__menu main-navigation col-variable-width">

                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                                ?>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-header__welcome">
                <div class="welcome-block">
                    <div class="welcome-block__title">
                        <h1>
                            <?php echo $welcome_section_title; ?>
                        </h1>
                    </div>
                    <div class="welcome-block__desc">
                        <?php echo $welcome_section_desc; ?>
                    </div>
                    <div class="welcome-block__link">
                        <a href="<?php echo $welcome_section_link; ?>" class="link-button red-button"><?php echo $welcome_section_link_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->
