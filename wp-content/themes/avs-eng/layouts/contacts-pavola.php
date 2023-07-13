<?php
/*
Template Name: Контакты
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
<?php endif; ?>

<?php
// Блок "Текст"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
        <h2>
          <?php echo wp_kses_post(get_field('text_block_title')); ?>
          КАК С НАМИ СВЯЗАТЬСЯ
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('text_block_content')); ?>
          +7 (921) 460-36-00
          spa@dachawintera.ru
          (ежедневно с 10:00 до 22:00)
          Отдел контроля качества
          quality@dachawintera.ru
          Для СМИ и сотрудничества
          pr-dw@dachawintera.ru
        </div>
      </div>
  </div>
</section>

<?php
// Как добраться
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
<?php endif; ?>

<?php
// Заявки на корпоративные мероприятия
?>
<?php $contacts_reversation = get_field('contacts_reversation'); ?>
<?php if (!$contacts_reversation): ?>
  <div class="container">
    <hr>
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
// Блок "МАРШРУТЫ И КООРДИНАТЫ"
?>
<section class="text-block">
  <div class="container">
    <div class="row">
        <h2>
          <?php echo wp_kses_post(get_field('text_block_title')); ?>
          Возможные маршруты до парк-отеля «Дача Винтера»
        </h2>
        <div class="content">
          <?php echo wp_kses_post(get_field('text_block_content')); ?>
          Координаты по земле:

          Широта: 61°39'07.3"N (61.652 021)
          Долгота: 30°41'01.8"E (30.683 825)

          Координаты по воде:

          Широта: 61°39'07.3"N
          Долгота: 30°41'01.8"E
        </div>

    </div>
  </div>
</section>

<?php
// Аккордион "МАРШРУТЫ И КООРДИНАТЫ"
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
<div class="container">
  <div class="accordion">
   <div class="accordion-item">
      <div class="accordion-heading">Заголовок первого элемента <span class="plus-minus"></span></div>
      <div class="accordion-content">Содержимое первого элемента</div>
   </div>
   <div class="accordion-item">
      <div class="accordion-heading">Заголовок второго элемента <span class="plus-minus"></span></div>
      <div class="accordion-content">Содержимое второго элемента</div>
   </div>
   <div class="accordion-item">
      <div class="accordion-heading">Заголовок третьего элемента <span class="plus-minus"></span></div>
      <div class="accordion-content">Содержимое третьего элемента</div>
   </div>
</div>
</div>


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
        <div class="grid-item" style="background-image: url('<?php echo esc_url($impression['image']); ?>')">
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

<!--  -->
<?php if (get_field('link_count')): ?>
  <?php
  $args = array(
    'post_type' => 'how_to_get_there',
    'showposts' => 999,
  );
  $the_query = new WP_Query($args); ?>
  <section class="useful_link">
    <div class="section_area">
      <div class="container">
        <div class="row">
          <div class="wrapper">
            <?php while ($the_query->have_posts()):
              $the_query->the_post(); ?>
              <!-- start block -->
                <div class="link">
                  <div class="description">
                    <h3>
                      <?php the_field('how_to_get_there_title'); ?>
                    </h3>
                    <p>
                      <?php the_field('how_to_get_there_description'); ?>
                    </p>
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
    <?php wp_reset_query(); ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</section>

<?php
get_footer();