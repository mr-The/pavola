<?php
require 'wp-includes/class-phpmailer.php';
require_once __DIR__ . '/recapcha.php';
// Введите свой секретный ключ
$secret = "6Lf0gVQUAAAAAOVqGWm-xayzeQA2M1dM8KW2SiQ4";
// пустой ответ каптчи
$response = null;
// Проверка вашего секретного ключа
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
 if ($response != null && $response->success) {
$msg = '';
//if (array_key_exists('attachmentFile', $_FILES)) {
$site_mail = trim($_POST["admin_email"]);
 $email = new PHPMailer();
        $email->From      = 'site@avs-eng.ru';
        $email->FromName  = trim($_POST["project_name"]);
        $email->Subject   = trim($_POST["form_subject"]);
        $formInfo = strip_tags($_POST['formInfo']);
       foreach ( $_POST as $key => $value ) {
    if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
      $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>
      ";
    }
  }
  }
   else {
      echo '<p class="success">Не пройдена каптча! Попробуйте еще раз!</p>';
    } 
$content = preg_replace('/\\\\/','', $message);
$content = "<table style='width: 100%;'>$message</table>";
function adopt($text) {
  return '=?UTF-8?B?'.Base64_encode($text).'?=';
}
$email->MsgHTML($content );
$email->IsSendmail();
        $email->Body      = $content;
        $email->AddAddress($site_mail);
        $email->WordWrap = 80;
        $email->CharSet = 'UTF-8';
       /* if(is_array($_FILES)) {
  $email->addAttachment($_FILES['attachmentFile']['tmp_name'],$_FILES['attachmentFile']['name']); 
}*/
//Attach multiple files one by one
if(is_array($_FILES)) {
    for ($ct = 0; $ct < count($_FILES['attachmentFile']['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['attachmentFile']['name'][$ct]));
        $filename = $_FILES['attachmentFile']['name'][$ct];
        if (move_uploaded_file($_FILES['attachmentFile']['tmp_name'][$ct], $uploadfile)) {
            $email->addAttachment($uploadfile, $filename);
        } else {
            $msg .= 'Failed to move file to ' . $uploadfile;
        }
    }
    }
    $email->IsHTML(true);
    if (!$email->send()) {
        $msg .= "Mailer Error: " . $email->ErrorInfo;
    } else {
        $msg .= "Message sent!";
    }
//}
       
       // $r = $email->send();
?>