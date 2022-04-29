<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if(!empty($name) && !empty($email) && !empty($phone)) {
        $to = 'artemartyr9@gmail.com';
        $headers = 'Content-type: text/plain; charset = utf-8'; 
        $message = 'Сообщение отправил: '.$name.'\nПочта заказчика: '.$email.'\nНомер телефона: '.$phone;
        $res = mail($to, $message, $headers);
        if($res == true) {
            echo '<p>Заявка отправлена! Спасибо что выбрали нас</p>';
            echo '<a href="index.html">Нажмите что бы перейти на главную</a>';
        } else {
            echo '<p>Ошибка сервера, заказ не отправлен!</p>';
            echo '<a href="index.html">Нажмите что бы перейти на главную</a>';
        }
    } else {
        echo '<p>Вы не заполнили форму!</p>';
    }
?>