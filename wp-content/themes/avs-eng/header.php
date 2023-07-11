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
                        <a target="_blank" href="https://vk.com/" class="header__social-link" rel="noopener">
                                <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.21245 11.0036C6.24189 12.4823 7.42476 13.79 8.95287 14.7152C10.6834 15.7638 12.5465 16.0801 14.5114 15.9836C15.4294 15.937 15.7055 15.6832 15.7479 14.7135C15.7763 14.0491 15.8487 13.3865 16.1573 12.7895C16.4605 12.204 16.9205 12.0932 17.4512 12.4574C17.7155 12.6415 17.938 12.8718 18.1487 13.1183C18.6659 13.7168 19.1665 14.3366 19.7022 14.9154C20.3759 15.6425 21.1748 16.0709 22.1771 15.9836L26.0607 15.9854C26.6857 15.9405 27.0108 15.1282 26.652 14.3864C26.3993 13.8686 26.0677 13.4079 25.7171 12.9609C24.9235 11.9501 23.9883 11.0888 23.104 10.1744C22.3071 9.3495 22.2565 8.8706 22.8967 7.91876C23.5974 6.87892 24.3487 5.88045 25.0548 4.84622C25.7135 3.88 26.3894 2.91519 26.7343 1.75965C26.9552 1.02202 26.7598 0.697027 26.0491 0.566609C25.9261 0.545223 25.7982 0.545223 25.6735 0.545223L21.4476 0.539613C20.9271 0.530849 20.6407 0.772052 20.4569 1.26112C20.2075 1.92233 19.9516 2.58318 19.6546 3.21915C18.9843 4.66602 18.2343 6.0645 17.1831 7.24703C16.9506 7.50752 16.6926 7.83812 16.3054 7.70244C15.8219 7.51488 15.6788 6.66856 15.687 6.38284L15.6834 1.21134C15.5895 0.474054 15.434 0.143451 14.7419 6.10352e-05H10.3527C9.76835 6.10352e-05 9.47338 0.241615 9.15988 0.629013C8.98131 0.85444 8.92543 0.998882 9.29646 1.07391C10.024 1.2201 10.437 1.72039 10.5448 2.49413C10.7184 3.73205 10.7065 4.97488 10.6057 6.21631C10.5769 6.57881 10.518 6.93992 10.3828 7.27929C10.1708 7.81323 9.82688 7.92051 9.37715 7.59201C8.97139 7.29541 8.68502 6.87751 8.40327 6.45786C7.35036 4.88022 6.5114 3.18023 5.82555 1.39364C5.62846 0.877228 5.28653 0.564856 4.77098 0.55574C3.50378 0.534355 2.23526 0.531199 0.96641 0.557493C0.204834 0.571867 -0.02268 0.964875 0.28916 1.699C1.66912 4.95525 3.20583 8.12034 5.21245 11.0036Z" fill="#ccc"></path>
                                </svg>
                            </a>
                        <a target="_blank" href="https://t.me/" class="header__social-link" rel="noopener">
                            <svg width="20" heigth="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 19.89">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#ccc"
                                    d="M1.65,8.56Q11.31,4.36,14.54,3C20.68.46,22,0,22.78,0a1.47,1.47,0,0,1,.86.26.92.92,0,0,1,.31.6,3.77,3.77,0,0,1,0,.87c-.33,3.49-1.77,12-2.5,15.88-.31,1.66-.92,2.22-1.51,2.27-1.29.12-2.26-.85-3.51-1.66-1.94-1.28-3-2.07-4.93-3.32-2.18-1.43-.76-2.22.48-3.52.32-.33,6-5.48,6.09-5.94a.49.49,0,0,0-.1-.39.5.5,0,0,0-.46,0q-.3.07-9.32,6.16a4.23,4.23,0,0,1-2.4.89,15.86,15.86,0,0,1-3.44-.82C1,10.79-.09,10.55,0,9.78.06,9.39.6,9,1.65,8.56Z">
                                </path>
                            </svg>
                        </a>
                        <div class="btn_group">
                            <button class="popup-with-zoom-anim btn btn-callback"
                                data-mfp-src="#order_back">Забронировать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>