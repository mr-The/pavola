<?php
$true_page = 'theme-admin.php'; // это часть URL страницы, рекомендую использовать строковое значение, т.к. в данном случае не будет зависимости от того, в какой файл вы всё это вставите
 
/*
 * Функция, добавляющая страницу в пункт меню Настройки
 */
function true_options() {
	global $true_page;
	add_menu_page( 'Настройки темы', 'Настройки темы', 'manage_options', $true_page, 'true_option_page');  
}
add_action('admin_menu', 'true_options');
 
/**
 * Возвратная функция (Callback)
 */ 
function true_option_page(){
	global $true_page;
	?><div class="wrap">
		<h2>Дополнительные параметры сайта</h2>
		<form method="post" enctype="multipart/form-data" action="options.php">
			<?php 
			settings_fields('true_options'); // меняем под себя только здесь (название настроек)
			do_settings_sections($true_page);
			?>
			<p class="submit">  
				<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />  
			</p>
		</form>
	</div><?php
}
 
/*
 * Регистрируем настройки
 * Мои настройки будут храниться в базе под названием true_options (это также видно в предыдущей функции)
 */
function true_option_settings() {
	global $true_page;
	// Присваиваем функцию валидации ( true_validate_settings() ). Вы найдете её ниже
	register_setting( 'true_options', 'true_options', 'true_validate_settings' ); // true_options
 
	// Секция настройка шапки
	add_settings_section( 'header-section', 'Настройки шапки', '', $true_page );
 
	// Номер телефона
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'phone',
		'desc'      => 'Введите номер телефона в шапке', // описание
		'label_for' => 'phone' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'phone', 'Телефон в шапке', 'true_option_display_settings', $true_page, 'header-section', $true_field_params );
 

 
	// Секция настройка футера
 
	add_settings_section( 'footer-section', 'Настройки футера', '', $true_page );
 	// Копирайт
	$true_field_params = array(
		'type'      => 'textarea',
		'id'        => 'copyrite',
		'desc'      => 'Копирайт'
	);
	add_settings_field( 'copyrite', 'Копирайт сайта', 'true_option_display_settings', $true_page, 'footer-section', $true_field_params );
	// Адресс
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'adress',
		'desc'      => 'Введите адрес компании', // описание
		'label_for' => 'adress' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'adress', 'Адрес компании', 'true_option_display_settings', $true_page, 'footer-section', $true_field_params );
	// Email
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'email',
		'desc'      => 'Введите email адрес', // описание
		'label_for' => 'email' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'email', 'Email адрес', 'true_option_display_settings', $true_page, 'footer-section', $true_field_params );
 
 // Настройки соц сетей
 
	add_settings_section( 'social-section', 'Социальные сети', '', $true_page );
	// Ссылка на VK
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'vk',
		'desc'      => 'Ссылка на VK', // описание
		'label_for' => 'vk' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'vk', 'Ссылка на VK', 'true_option_display_settings', $true_page, 'social-section', $true_field_params );
	// Ссылка на Facebook
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'fb',
		'desc'      => 'Ссылка на Facebook', // описание
		'label_for' => 'fb' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'fb', 'Ссылка на Facebook', 'true_option_display_settings', $true_page, 'social-section', $true_field_params );
	// Ссылка на Odnoklassniki
	$true_field_params = array(
		'type'      => 'text', // тип
		'id'        => 'ok',
		'desc'      => 'Ссылка на Odnoklassniki', // описание
		'label_for' => 'ok' // позволяет сделать название настройки лейблом (если не понимаете, что это, можете не использовать), по идее должно быть одинаковым с параметром id
	);
	add_settings_field( 'ok', 'Ссылка на Odnoklassniki', 'true_option_display_settings', $true_page, 'social-section', $true_field_params );
}
add_action( 'admin_init', 'true_option_settings' );
 
/*
 * Функция отображения полей ввода
 * Здесь задаётся HTML и PHP, выводящий поля
 */
function true_option_display_settings($args) {
	extract( $args );
 
	$option_name = 'true_options';
 
	$o = get_option( $option_name );
 
	switch ( $type ) {  
		case 'text':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;
		case 'textarea':  
			$o[$id] = esc_attr( stripslashes($o[$id]) );
			echo "<textarea class='code regular-text' cols='5' rows='5' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";  
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";  
		break;

		
	}
}
 
/*
 * Функция проверки правильности вводимых полей
 */
function true_validate_settings($input) {
	foreach($input as $k => $v) {
		$valid_input[$k] = trim($v);
 
		/* Вы можете включить в эту функцию различные проверки значений, например
		if(! задаем условие ) { // если не выполняется
			$valid_input[$k] = ''; // тогда присваиваем значению пустую строку
		}
		*/
	}
	return $valid_input;
}