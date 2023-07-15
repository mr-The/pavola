<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package avs-eng
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head();
    $options = get_option('true_options'); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="top_cnt">
            <div class="container">
                <div class="row">

                    <div class="tp_cnt-wrap">
                        <?php if (function_exists('the_custom_logo') && has_custom_logo()): ?>
                            <div class="logo_block"><a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php the_custom_logo(); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <a href="#" class="toggle-mnu hidden-lg"><span></span></a>
                        <div class="top_nav">
                            <nav>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'menu_class' => 'menu',
                                        'theme_location' => 'header-nav',
                                    )
                                );
                                ?>
                            </nav>
                        </div>
                        <?php if ($options['phone']) { ?>
                            <div class="tel_block"><a href="tel:<? echo $options['phone']; ?>"><? echo $options['phone']; ?></a></div>
                        <?php } ?>
                        <div class="btn_group">
                            <button class="popup-with-zoom-anim btn btn-callback"
                                data-mfp-src="#order_back">Забронировать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>