<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avs-eng
 */

?>

<!-- start block -->
                                 <div class="slider_item">
                                        <a href="<?php the_permalink(); ?>">
                <div class="item_poster">
                    <img src="<?php echo kama_thumb_src('w=275 &h=179 &q=75'); ?>" alt="">
                </div>
                </a>
                <div class="post_meta">
                    <div class="post_date"><span><?php the_time('d M Y') ?></span></div>
                    <div class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title('<h3>' , '</h3>'); ?></a></div>
                </div>
                                        </div>
                                        <!-- end block -->