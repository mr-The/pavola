<?php
/**
 * Template name: Шаблон для направления
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

	<div id="primary" class="container">
		<main id="main" class="row">
<?php
$count = get_field('counter');
$args = array(
      'post_type'=> 'service',
      'showposts' => $count,
   );
 $the_query = new WP_Query($args); ?>
<section class="service-block">
   <div class="section_area">
       <div class="container">
           <div class="row">
               <div class="section_title" style="padding-top: 0;">
                  <h2><?php the_title(); ?></h2>
               </div>
               <div class="service_blockwrap">
                 <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!-- start itm -->
<div class="service_itm">
    <div class="item_area" onclick="location.href = '<?php the_permalink(); ?>'" style="cursor: pointer;">
        <div class="item_content">
           <div class="service_icon">
               <img src="<?php echo kama_thumb_src('w=66 &h=66 &q=75'); ?>" alt="">
           </div>
           <div class="content_inf--block">
               <h3 class="title"><?php the_title(); ?></h3>
               <span><?php echo kama_excerpt( array('maxchar'=>150) ); ?></span>
           </div>
        </div>
    </div>
</div>
<!-- end itm -->
 <?php endwhile; ?>
   
   
               </div>
           </div>
       </div>
   </div>
</section>
</main>
</div>
<?php
get_footer();
