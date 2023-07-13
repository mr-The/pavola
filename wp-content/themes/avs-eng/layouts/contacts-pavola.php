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
        Возможные маршруты до парк-отеля «Дача Винтера»
      </h2>
      <div class="content">
        <?php echo wp_kses_post(get_field('contacts_route_text_block_content')); ?>
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
// Аккордеон "МАРШРУТЫ И КООРДИНАТЫ"
?>
<?php $contacts_accordeon = get_field('contacts_accordeon'); ?>
<?php if ($contacts_accordeon): ?>
  <section>
  <?php endif; ?>
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



<?php
// Яндекс Карта
?>
<?php $contacts_map = get_field('contacts_map'); ?>
<?php if ($contacts_map): ?>
  <div style="position:relative;overflow:hidden;">
    <iframe
      src="<?php echo esc_url($contacts_map); ?>"
      width="100%" height="500" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
  </div>
<?php endif; ?>

<?php
get_footer();