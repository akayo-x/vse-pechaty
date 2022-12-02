<?php
    $pechat = $_POST['pechat'];
    $status = $_POST['status'];
    $ostanastka = $_POST['ostanastka'];
    $name = $_POST['name'];
    $inn = $_POST['inn/ogrn'];


    $pechat = htmlspecialchars($pechat);
    $status = htmlspecialchars($status);
    $ostanastka = htmlspecialchars($ostanastka);
    $name = htmlspecialchars($name);
    $inn = htmlspecialchars($inn);


    $pechat = urldecode($pechat);
    $status = urldecode($status);
    $ostanastka = urldecode($ostanastka);
    $name = urldecode($name);
    $inn = urldecode($inn);

    $pechat = trim($pechat);
    $status = trim($status);
    $ostanastka = trim($ostanastka);
    $name = trim($name);
    $inn = trim($inn);


    if (mail("Profi-prinr.kzn@mail.ru",
            "Новое письмо с сайта",
            "Печать: " .$pechat."\n".
            "Статус: ".$status."\n".
            "Остнастка: " .$ostanastka."\n".
            "Название: " .$name."\n".
            "ИНН/ОГРН: " .$name."\n".
            "From: vse-obyavleniya.ru \r\n")
        ) {
            echo ('Спасибо за заказ, скоро мы вам ответим');
        }
        else {
            echo('Извините есть ошибки в заказ');
        }
?>