<?php
/*
Template Name: О месте
*/

get_header();

// Панорамное изображение
?>
<?php $panorama_image = get_field('panorama_image'); ?>
<?php if ($panorama_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($panorama_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_description')); ?>
      </p>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<?php $element = get_field('text_block_content'); ?>
<?php if ($element): ?>
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
  <hr>
<?php endif; ?>

<?php
// Панорамное изображение с текстом
?>
<?php $panorama_image_text = get_field('panorama_image_text'); ?>
<?php if ($panorama_image_text): ?>
  <section class="panorama-text-block" style="background-image: url('<?php echo esc_url($panorama_image_text); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_text_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_text_description')); ?>
      </p>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст" 2
?>
<?php $element = get_field('text_block_2_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_2_title')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_2_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Панорамное изображение с текстом 2
?>
<?php $panorama_image_text_2 = get_field('panorama_image_text_2'); ?>
<?php if ($panorama_image_text_2): ?>
  <section class="panorama-text-block" style="background-image: url('<?php echo esc_url($panorama_image_text_2); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_text_2_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_text_2_description')); ?>
      </p>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст" 3
?>
<?php $element = get_field('text_block_3_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_3_title')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_3_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<?php endif; ?>
<?php
// Панорамное изображение с текстом 3
?>
<?php $panorama_image_text_3 = get_field('panorama_image_text_3'); ?>
<?php if ($panorama_image_text_3): ?>
  <section class="panorama-text-block" style="background-image: url('<?php echo esc_url($panorama_image_text_3); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_text_3_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_text_3_description')); ?>
      </p>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст" 4
?>
<?php $element = get_field('text_block_4_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_4_title')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_4_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<?php endif; ?>

<!-- Блок фото -->
<?php $photo = get_field('photo'); ?>
<?php if ($photo[0]['upload-image']): ?>
  <div class='infoblock container row'>
    <div class='infoblock-marshrut-box'>
      <?php while (has_sub_field('photo')): ?>
        <div class='infoblock-inform_marshrut infoblock-inform_marshrut_2'>
          <div class='infoblock-inform-image'>
            <div class="library" style="background-image: url(<?php the_sub_field('upload-image'); ?>);"></div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст" 5
?>
<?php $element = get_field('text_block_5_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_5_title')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_5_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Панорамное изображение с текстом 4
?>
<?php $panorama_image_text_4 = get_field('panorama_image_text_4'); ?>
<?php if ($panorama_image_text_4): ?>
  <section class="panorama-text-block" style="background-image: url('<?php echo esc_url($panorama_image_text_4); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_image_text_4_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_image_text_4_description')); ?>
      </p>
    </div>
  </section>
  <hr>
<?php endif; ?>

<?php
// Блок "Текст" 6
?>
<?php $element = get_field('text_block_6_content'); ?>
<?php if ($element): ?>
  <section class="text-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>
            <?php echo wp_kses_post(get_field('text_block_6_title')); ?>
          </h2>
          <div class="content">
            <?php echo wp_kses_post(get_field('text_block_6_content')); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
<?php endif; ?>


<?php
// Блок "Варианты проживания"
?>
<section class="options-block">
  <?php $options = get_field('options_images'); ?>
  <?php if ($options): ?>
    <div class="grid">
      <?php foreach ($options as $option): ?>
        <div class="grid-item" style="background-image: url('<?php echo esc_url($option['image']); ?>');">
          <a href="<?php echo esc_url($option['link']); ?>">
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
            <?php else:
              echo "<h2>Полезные ссылки</h2>";
              ?>
            </div>
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