<?php
/**
 * Template name: Главная страница
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package avs-eng
 */

get_header();
?>
<main>
	<?php if(get_field('slider')): ?>
<section class="main-slider">
               <div class="slider_init">
                  <?php while(has_sub_field('slider')): ?>
                    <!-- start slide -->
                    <div class="item">
                    	<?php if(get_sub_field('upload-image')): ?>
                            <img src="<?php the_sub_field('upload-image'); ?>" alt="">
                            <?php endif; ?>
                            <div class="container">
                                <div class="row">
                                   <div class="slider-content">
                                       <div class="sl_block">
                                          <div class="sl_info">
                                          	<?php if(get_sub_field('slider-title')): ?>
                                            <h2><?php the_sub_field('slider-title'); ?></h2>
                                             <?php endif; ?>
                                            <?php if(get_sub_field('slider-desc')): ?>
                                            <?php the_sub_field('slider-desc'); ?>
                                             <?php endif; ?>
                                            <?php if(get_sub_field('full-link')): ?>
                                        <div class="btn_group">
                                            <a href="<?php the_sub_field('full-link'); ?>" class="btn btn-more">подробнее</a>
                                        </div>
                                        <?php endif; ?>
                                          </div>
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                       <!-- end slide -->
                       <?php endwhile; ?>
               </div>


</section>
<?php endif; ?>
<?php if( get_field('counter') ): ?>
<?php
$count = get_field('counter');
$title = get_field('service-title');
$args = array(
      'post_type'=> 'service',
      'showposts' => $count,
   );
 $the_query = new WP_Query($args); ?>
<section class="service-block">
   <div class="section_area">
       <div class="container">
           <div class="row">
               <div class="service_blockwrap">
                 <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- start itm -->
                <div class="">
                    <?php the_content(); ?>
                </div>
                <!-- end itm -->
                <?php endwhile; ?>
   
   
               </div>
           </div>
       </div>
   </div>
</section>
<?php wp_reset_query(); ?>
<?php endif; ?>
<!-- <section class="solucion">
 <div class="soluciton-wrap">
     <div class="container">
         <div class="row">
             <div class="soluciton-content">
                <div class="sol_text">
                    <span>Ищите готовое решение для вашего производства?  Просто свяжитесь с нами</span>
                </div>
                <div class="sol_btn">
                        <div class="btn_group">
                            <button class="popup-with-zoom-anim btn btn-calm" data-mfp-src="#call_back">Связаться</button>
                            </div>
                </div>
             </div>
         </div>
     </div>
 </div>
</section> -->
<?php if( get_field('pr-count') ): ?>
<?php
$count = get_field('pr-count');
$title = get_field('pr-title');
$args = array(
      'post_type'=> 'project',
      'showposts' => $count,
   );
 $the_query = new WP_Query($args); ?>
<section class="project">
    <div class="section_area">
        <div class="container">
            <div class="row">
                <div class="section_title">
                   <?php if ($title) : ?>
                    		<h2><?php echo $title; ?></h2>
                    	<?php else:
                    	echo "<h2>Название секции</h2>";
                    	 ?>
                    	<?php endif; ?>
                    <div class="slide_arrow">
                            <ul>
                                <li class="project-prev"></li>
                                <li class="project-next"></li>
                            </ul>
                        </div>
                </div>
                <div class="slider_areawrap">
                    
                    <div class="news-slider" id="project">
                       <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                             
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
                                        <?php endwhile; ?>
                    </div>
                </div>
                </div>
                <div class="line"></div>
                </div>
                </div>
               
</section>
<?php wp_reset_query(); ?>
<?php endif; ?>
<?php if( get_field('category') ): ?>
<?php
$count = get_field('news-counter');
$cat = get_field('category');
$title = get_field('news-title');
$args = array(
      'post_type'=> 'post',
      'cat' => $cat,
      'showposts' => $count,
   );
 $the_query = new WP_Query($args); ?>
<section class="news">
        <div class="section_area">
            <div class="container">
                <div class="row">
                    <div class="section_title">
                    	<?php if ($title) : ?>
                    		<h2><?php echo $title; ?></h2>
                    	<?php else:
                    	echo "<h2>Новости</h2>";
                    	 ?>
                    	<?php endif; ?>
                        
                        <div class="slide_arrow">
                                <ul>
                                    <li class="news-prev"></li>
                                    <li class="news-next"></li>
                                </ul>
                            </div>
                    </div>
                    <div class="slider_areawrap">
                        
                        <div class="news-slider" id="news">
                          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                             
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
                                        <?php endwhile; ?>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                   
    </section>
    <?php wp_reset_query(); ?>
    <?php endif; ?>
<!-- <section class="merit">
    <div class="merit-wrap">
        <div class="container">
            <div class="row">
                <div class="merit-content">
                    
                    <div class="merit_item">
                       <div class="m_icon">
                           <img src="<?php bloginfo('template_url'); ?>/images/check.png" alt="">
                       </div>
                       <div class="m_inf">
                           <h4>300+</h4>
                           <span>Успешных проектов</span>
                       </div>
                    </div>
                    
                     
                     <div class="merit_item">
                            <div class="m_icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/experience.png" alt="">
                            </div>
                            <div class="m_inf">
                                <h4>15 лет</h4>
                                <span>Опыт работа в сфере АСУ</span>
                            </div>
                         </div>
                         
                           
                     <div class="merit_item">
                            <div class="m_icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/guarante.png" alt="">
                            </div>
                            <div class="m_inf">
                                <h4>1 год</h4>
                                <span>Гарантии на работы</span>
                            </div>
                         </div>
                         
                          
                     <div class="merit_item">
                            <div class="m_icon">
                                <img src="<?php bloginfo('template_url'); ?>/images/like.png" alt="">
                            </div>
                            <div class="m_inf">
                                <h4>89%</h4>
                                <span>Обращений  <br> по рекомендации </span>
                            </div>
                         </div>
                         
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php if( get_field('rew-counter') ): ?>

<?php
$count = get_field('rew-counter');
$title = get_field('rew-title');
$args = array(
      'post_type'=> 'rewiew',
      'showposts' => $count,
   );
 $the_query = new WP_Query($args); ?>
<section class="rewiew">
        <div class="section_area">
                <div class="container">
                    <div class="row">
                        <div class="section_title">
                            <?php if ($title) : ?>
                        <h2><?php echo $title; ?></h2>
                      <?php else:
                      echo "<h2>Название секции</h2>";
                       ?>
                      <?php endif; ?>
                            <div class="slide_arrow">
                                    <ul>
                                        <li class="rew-prev"></li>
                                        <li class="rew-next"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider_areawrap">
                               <div id="rew-slider" class="rewiew_slider">
                                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                   
                                  <div class="rew_item">
                                     <div class="rew_itemcontent">
                                      <div class="rewiew_icontent">
                                          <?php echo kama_excerpt( array('maxchar'=>250) ); ?>
                                          <div class="rew_authorbox">
                                              <div class="rew_user-ava">
                                                <img src="<?php echo kama_thumb_src('w=70 &h=70 &q=75'); ?>" alt="">
                                              </div>
                                              <div class="user-name">
                                                  <div><?php the_title(); ?></div>
                                                  <span>Мираторг</span>
                                              </div>
                                          </div>
                                      </div>
                                     </div>
                                  </div>
                                <!--   end -->
                               <?php endwhile; ?>
                               </div>
                                </div>
                            </div>
                            </div>
                            </div>
                        
</section>
<?php wp_reset_query(); ?>
<?php endif; ?>
<div class="hidden-section"></div>
<!-- <section class="left-question">
        <div class="soluciton-wrap">
            <div class="container">
                <div class="row">
                    <div class="soluciton-content">
                       <div class="sol_text">
                           <span>Остались вопросы? Напишите на прямую руководителю Имя Фамилия Отчество</span>
                       </div>
                       <div class="sol_btn">
                               <div class="btn_group">
                                <button class="popup-with-zoom-anim btn btn-calm" data-mfp-src="#call_back">Связаться</button>
                                   </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
       </section> -->
</main>
<?php
get_footer();