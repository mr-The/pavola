<?php
/*
Template Name: Главная страница Павола
*/

get_header();

// Панорамное изображение
?>
<section class="panorama-block">
  <?php $panorama_image = get_field('panorama_image'); ?>
  <?php if ($panorama_image): ?>
    <img src="<?php echo esc_url($panorama_image); ?>" alt="">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_description')); ?>
      </p>
    </div>
  <?php endif; ?>
</section>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('text_block_title')); ?>
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('text_block_content')); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// Блок "Впечатления"
?>
<section class="impressions-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('impressions_block_title')); ?>
        </h2>
      </div>
    </div>
  </div>
  <?php $impressions = get_field('impressions_images'); ?>
  <?php if ($impressions): ?>
    <div class="grid">
      <?php foreach ($impressions as $impression): ?>
        <div class="grid-item">
          <img src="<?php echo esc_url($impression['image']); ?>" alt="<?php echo esc_attr($impression['title']); ?>">
          <div class="description">
            <?php echo wp_kses_post($impression['description']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</section>

<?php
// Блок "Варианты"
?>
<section class="options-block">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>
          <?php echo wp_kses_post(get_field('options_block_title')); ?>
        </h2>
      </div>
    </div>
  </div>
  <?php $options = get_field('options_images'); ?>
  <?php if ($options): ?>
    <div class="grid">
      <?php foreach ($options as $option): ?>
        <div class="grid-item" style="background-image: url('<?php echo esc_url($option['image']); ?>');">
          <a href="<?php echo esc_url($option['link']); ?>">
            <!-- <img src="<?php echo esc_url($option['image']); ?>" alt="<?php echo esc_attr($option['title']); ?>"> -->
            <div class="description">
              <?php echo wp_kses_post($option['description']); ?>

              <button class="options_button">Подробнее</button>

            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</section>

<?php
// Блок "Полезные ссылки"
?>
<?php if (get_field('link_count')): ?>
  <?php
  $count = get_field('link_count');
  $title = get_field('links_block_title');
  $args = array(
    'post_type' => 'useful_links',
    'showposts' => $count,
  );
  $the_query = new WP_Query($args); ?>
  <section class="useful_link">
    <div class="section_area">
      <div class="container">
        <div class="row">
          <div class="section_title">
            <?php if ($title): ?>
              <h2>
                <?php echo wp_kses_post(get_field('links_block_title')); ?>
              </h2>
            </div>
          <?php else:
              echo "<h2>Полезные ссылки</h2>";
              ?>
          <?php endif; ?>
          <div class="wrapper">
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
              <!-- start block -->
              <a href="<?php the_field('useful_links_link'); ?>">
                <div class="link">
                  <div class="description">
                    <h3>
                      <?php the_field('useful_links_title'); ?>
                    </h3>
                    <p>
                      <?php the_field('useful_links_description'); ?>
                    </p>
                  </div>
                  <span class="name">
                    <?php the_field('useful_links_name'); ?> →
                  </span>
                  </span>
                </div>
              </a>
              <!-- end block -->
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="line"></div>
    </div>
    </div>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>
<?php
get_footer();