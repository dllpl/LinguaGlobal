<?php

$field__name = trim($_POST['name']);

$field__city = trim($_POST['city']);

$field__email = trim($_POST['email']);

$field__skype = trim($_POST['skype']);

$field__phone = trim($_POST['phone']);

$field__level = trim($_POST['level']);


if (strlen($field__name) > 15 OR strlen($field__city) > 30 OR strlen($field__email) > 30 OR strlen($field__skype) > 20 OR strlen($field__phone) > 30 OR strlen($field__level) > 30){
    die();
}


if ($field__level === '1') {
    $field__level = 'начальный';
} else if ($field__level === '2') {
    $field__level = 'уверенный';
} else if ($field__level === '3') {
    $field__level = 'продвинутый';
}



$mail_to = 'linguaglobal@yandex.ru';

$subject = 'Новая заявка на бесплатный пробный урок от: '.$field__name;

$body_message = 'Имя: '.$field__name."\n".'Город: '.$field__city."\n".'Почта: '.$field__email."\n".'Скайп: '.$field__skype."\n".'Телефон: '.$field__phone."\n".'Уровень английского: '.$field__level;

$mail_status = mail($mail_to, $subject, $body_message);


echo 1;
die();
