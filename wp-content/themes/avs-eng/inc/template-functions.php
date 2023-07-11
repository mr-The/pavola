<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package avs-eng
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function avs_eng_body_classes($classes)
{
   // Adds a class of hfeed to non-singular pages.
   if (!is_singular()) {
      $classes[] = 'hfeed';
   }

   // Adds a class of no-sidebar when there is no sidebar present.
   if (!is_active_sidebar('sidebar-1')) {
      $classes[] = 'no-sidebar';
   }

   return $classes;
}
add_filter('body_class', 'avs_eng_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function avs_eng_pingback_header()
{
   if (is_singular() && pings_open()) {
      echo '<link rel="pingback" href="', esc_url(get_bloginfo('pingback_url')), '">';
   }
}
add_action('wp_head', 'avs_eng_pingback_header');

/////////
// Убираем wp-json

add_filter('rest_enabled', '__return_false');
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');
remove_action('wp_head', 'rest_output_link_wp_head', 10, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('auth_cookie_malformed', 'rest_cookie_collect_status');
remove_action('auth_cookie_expired', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_username', 'rest_cookie_collect_status');
remove_action('auth_cookie_bad_hash', 'rest_cookie_collect_status');
remove_filter('rest_authentication_errors', 'rest_cookie_check_errors', 100);
remove_action('init', 'rest_api_init');
remove_action('parse_request', 'rest_api_loaded');
remove_action('rest_api_init', 'rest_api_default_filters', 10, 1);
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);
remove_action('auth_cookie_valid', 'rest_cookie_collect_status');
remove_action('wp_head', 'wp_oembed_add_discovery_links');

// Убираем шортлинки

remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3); // убирает ссылки на rss категорий
remove_action('wp_head', 'feed_links', 2); // минус ссылки на основной rss и комментарии
remove_action('wp_head', 'rsd_link'); // сервис Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer
remove_action('wp_head', 'wp_generator'); // скрыть версию wordpress
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function _remove_script_version($src)
{
   $parts = explode('?', $src);
   return $parts[0];
}
// Удаляем версию скриптов
add_filter('script_loader_src', '_remove_script_version', 15, 1);
// Удаляем версию стилей
add_filter('style_loader_src', '_remove_script_version', 15, 1);
add_filter('get_the_archive_title', function ($title) {

   if (is_category()) {

      $title = single_cat_title('', false);

   } elseif (is_tag()) {

      $title = single_tag_title('', false);

   } elseif (is_post_type_archive()) {

      $title = single_tag_title('', true);

   }

   return $title;

});

/**
 * ДОБАВЛЕНИЕ ПОЛЬЗОВАТЕЛЬСКОГО ТИПА ЗАПИСЕЙ
 */
function project()
{

   $labels = array(
      'name' => 'Проекты',
      'post type general name',
      'singular_name' => 'Проекты',
      'post type singular name',
      'add_new' => 'Добавить проект',
      'project',
      'add_new_item' => 'Добавить новый проект',
      'edit_item' => 'Редактировать проект',
      'new_item' => 'Новый проект',
      'all_items' => 'Все проекты',
      'view_item' => 'Смотреть проект',
      'search_items' => 'Найти проект',
      'not_found' => 'Проекты не найдены',
      'not_found_in_trash' => 'Нет удаленных проектов',
      'parent_item_colon' => 'Parent Item',
      'menu_name' => 'Проекты'
   );

   $args = array(
      'labels' => $labels,
      'menu_icon' => 'dashicons-archive',
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'project_category', 'revisions'),
      'exclude_from_search' => false,
   );

   register_post_type('project', $args);
}
add_action('init', 'project');

function useful_links()
{

   $labels = array(
      'name' => 'Полезные ссылки',
      'post type general name',
      'singular_name' => 'Полезная ссылка',
      'post type singular name',
      'add_new' => 'Добавить ссылку',
      'useful_links',
      'add_new_item' => 'Добавить новую ссылку',
      'edit_item' => 'Редактировать ссылку',
      'new_item' => 'Новая ссылка',
      'all_items' => 'Все ссылки',
      'view_item' => 'Смотреть ссылку',
      'search_items' => 'Найти ссылку',
      'not_found' => 'Ссылки не найдены',
      'not_found_in_trash' => 'Нет удаленных ссылок',
      'parent_item_colon' => 'Parent Item',
      'menu_name' => 'Полезные ссылки'
   );

   $args = array(
      'labels' => $labels,
      'menu_icon' => 'dashicons-admin-links',
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
      'exclude_from_search' => false,
   );

   register_post_type('useful_links', $args);
}
add_action('init', 'useful_links');

function rewiew()
{

   $labels = array(
      'name' => 'Отзывы',
      'post type general name',
      'singular_name' => 'Отзывы',
      'post type singular name',
      'add_new' => 'Добавить отзыв',
      'rewiew',
      'add_new_item' => 'Добавить новый отзыв',
      'edit_item' => 'Редактировать отзыв',
      'new_item' => 'Новый отзыв',
      'all_items' => 'Все отзывы',
      'view_item' => 'Смотреть отзыв',
      'search_items' => 'Найти отзыв',
      'not_found' => 'Отзывы не найдены',
      'not_found_in_trash' => 'Нет удаленных отзывов',
      'parent_item_colon' => 'Parent Item',
      'menu_name' => 'Отзывы'
   );

   $args = array(
      'labels' => $labels,
      'menu_icon' => 'dashicons-format-status',
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'rewiew_category', 'revisions'),
      'exclude_from_search' => false,
   );

   register_post_type('rewiew', $args);
}
add_action('init', 'rewiew');

function service()
{

   $labels = array(
      'name' => 'Блоки на главную',
      'post type general name',
      'singular_name' => 'Блоки на главную',
      'post type singular name',
      'add_new' => 'Добавить блок',
      'service',
      'add_new_item' => 'Добавить новый блок',
      'edit_item' => 'Редактировать блок',
      'new_item' => 'Новый блок',
      'all_items' => 'Все блоки',
      'view_item' => 'Смотреть блоки',
      'search_items' => 'Найти блоки',
      'not_found' => 'Блоки не найдены',
      'not_found_in_trash' => 'Нет удаленных блоков',
      'parent_item_colon' => 'Parent Item',
      'menu_name' => 'Блоки'
   );

   $args = array(
      'labels' => $labels,
      'menu_icon' => 'dashicons-welcome-view-site',
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'service_category', 'revisions'),
      'exclude_from_search' => false,
   );

   register_post_type('service', $args);
}
add_action('init', 'service');



/**
 * Обрезка текста (excerpt). Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
 *
 * @param (строка/массив) $args Параметры.
 *
 * @return HTML
 * ver 2.6.1
 */
function kama_excerpt($args = '')
{
   global $post;

   $default = array(
      'maxchar' => 350,
      // количество символов.
      'text' => '',
      // какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
      // Если есть тег <!--more-->, то maxchar игнорируется и берется все до <!--more--> вместе с HTML
      'autop' => true,
      // Заменить переносы строк на <p> и <br> или нет
      'save_tags' => '',
      // Теги, которые нужно оставить в тексте, например '<strong><b><a>'
      'more_text' => 'Читать дальше...', // текст ссылки читать дальше
   );

   if (is_array($args))
      $_args = $args;
   else
      parse_str($args, $_args);

   $rg = (object) array_merge($default, $_args);
   if (!$rg->text)
      $rg->text = $post->post_excerpt ?: $post->post_content;
   $rg = apply_filters('kama_excerpt_args', $rg);

   $text = $rg->text;
   $text = preg_replace('~\[/?.*?\](?!\()~', '', $text); // убираем шоткоды, например:[singlepic id=3], markdown +
   $text = trim($text);

   // <!--more-->
   if (strpos($text, '<!--more-->')) {
      preg_match('/(.*)<!--more-->/s', $text, $mm);

      $text = trim($mm[1]);

      $text_append = ' <a href="' . get_permalink($post->ID) . '#more-' . $post->ID . '">' . $rg->more_text . '</a>';
   }
   // text, excerpt, content
   else {
      $text = trim(strip_tags($text, $rg->save_tags));

      // Обрезаем
      if (mb_strlen($text) > $rg->maxchar) {
         $text = mb_substr($text, 0, $rg->maxchar);
         $text = preg_replace('~(.*)\s[^\s]*$~s', '\\1 ...', $text); // убираем последнее слово, оно 99% неполное
      }
   }

   // Сохраняем переносы строк. Упрощенный аналог wpautop()
   if ($rg->autop) {
      $text = preg_replace(
         array("~\r~", "~\n{2,}~", "~\n~", '~</p><br ?/>~'),
         array('', '</p><p>', '<br />', '</p>'),
         $text
      );
   }

   $text = apply_filters('kama_excerpt', $text, $rg);

   if (isset($text_append))
      $text .= $text_append;

   return ($rg->autop && $text) ? "<p>$text</p>" : $text;
}
/* changelog
 * 2.6 - удалил параметр 'save_format' и заменил его на два параметра 'autop' и 'save_tags'.
 *       Немного изменил логику кода.
 */