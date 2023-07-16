<?php
/*
Template Name: Контакты
*/

get_header();

// Панорамное изображение
?>
<?php $contacts_panorama_image = get_field('contacts_panorama_image'); ?>
<?php if ($contacts_panorama_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($contacts_panorama_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('contacts_panorama_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('contacts_panorama_image_description')); ?>
      </p>
    </div>
  </section>
<?php endif; ?>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <hr>
      <h2>
        <?php echo wp_kses_post(get_field('contacts_text_block_title')); ?>
      </h2>
      <div class="content">
        <?php echo wp_kses_post(get_field('contacts_text_block_content')); ?>
      </div>
    </div>
  </div>
</section>

<?php
// Заявки на корпоративные мероприятия
?>
<?php $contacts_reversation = get_field('contacts_reversation'); ?>
<?php if ($contacts_reversation): ?>
  <div class="container">
    <div class="row btn_group wp-caption-text">
      <h2>
        <?php echo wp_kses_post(get_field('contacts_reversation')); ?>
      </h2>
      <div>
        <button class="popup-with-zoom-anim btn btn-callback" data-mfp-src="#order_back">
          Отправить заявку
        </button>
      </div>
    </div>
    <hr>
  </div>
<?php endif; ?>

<?php
// Как добраться
?>
<div id="howtoget"></div>
<?php $panorama_path_image = get_field('panorama_path_image'); ?>
<?php if ($panorama_path_image): ?>
  <section class="panorama-block" style="background-image: url('<?php echo esc_url($panorama_path_image); ?>')">
    <div class="description">
      <h3>
        <?php echo wp_kses_post(get_field('panorama_path_image_title')); ?>
      </h3>
      <p>
        <?php echo wp_kses_post(get_field('panorama_path_image_description')); ?>
      </p>
    </div>
  </section>
<?php endif; ?>

<?php
// Блок "МАРШРУТЫ И КООРДИНАТЫ"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
      <h2>
        <?php echo wp_kses_post(get_field('contacts_route_text_block_title')); ?>
      </h2>
      <div class="content">
        <?php echo wp_kses_post(get_field('contacts_route_text_block_content')); ?>
      </div>

    </div>
  </div>
</section>

<?php
// Аккордеон "МАРШРУТЫ И КООРДИНАТЫ"
?>
<?php $contacts_accordeon = get_field('contacts_accordeon'); ?>
<?php if ($contacts_accordeon): ?>
  <section>
    <div class="container">
      <div class="accordion">
        <?php foreach ($contacts_accordeon as $elem): ?>
          <!-- start block -->
          <div class="accordion-item">
            <div class="accordion-heading">
              <?php echo wp_kses_post($elem['contacts_accordeon_title']); ?>
              <span class="plus-minus"></span>
            </div>
            <div class="accordion-content">
              <?php echo wp_kses_post($elem['contacts_accordeon_description']); ?>
            </div>
          </div>
          <!-- end block -->
        <?php endforeach; ?>
      </div>
    </div>
    <div class="line"></div>
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  </section>
<?php endif; ?>

<!-- Тарифы на трансфер -->
<?php $tariff = get_field('tariff'); ?>
<?php if ($tariff): ?>
  <section class="tarif container">
    <div class="row">
      <div class='col'>
        <div class='tarif-point'>
          <h3>
            <?php echo wp_kses_post(get_field('tariff_title')); ?>
          </h3>
        </div>
        <?php while (has_sub_field('tariff')): ?>
          <div class='tarif-point'>
            <div class='tarif-point-text-box'>
              <div class='tarif-point-text'>
                <?php if (get_sub_field('name')): ?>
                  <p>
                    <?php the_sub_field('name'); ?>
                  </p>
                <?php endif; ?>
              </div>
              <div class='tarif-point-price'>
                <?php if (get_sub_field('price')): ?>
                  <p>
                    <?php the_sub_field('price'); ?>
                  </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <div class='inclusive'>
          <p>
            <?php echo wp_kses_post(get_field('inclusive')); ?>
          </p>
        </div>
      </div>
    </div>
    <hr>
  </section>
<?php endif; ?>

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
// Яндекс Карта
?>
<?php $contacts_map = get_field('contacts_map'); ?>
<?php if ($contacts_map): ?>
  <div class="map_full">
    <?php echo $contacts_map; ?>
  </div>
  <hr>
<?php endif; ?>

<?php
get_footer();