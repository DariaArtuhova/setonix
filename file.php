<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['question'])) {$question = $_POST['question'];}
    if (isset($_POST['file'])) {$file = $_POST['file'];}

    $to = "info.setonix@yandex.ru";
    $headers = "Content-type: text/plain; charset = utf-8";
    $subject = "$formData";
    $message = "$formData\n\nОткуда: $email \n\nОтправитель: $name \n\nТелефон: $phone \n\nВопрос: $question \n\nФайл: $file ";
    $send = mail ($to, $subject, $message);

    if ($send == 'true')
    {
    echo "<center>Спасибо за отправку вашего сообщения! Наши специалисты свяжутся с вами в течение часа.</center>";
    }
    else
    {
    echo "<center><b>Ошибка. Сообщение не отправлено! Проверьте правильность введенных данных</b></center>";
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}
?>

