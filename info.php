<?php
    $name = $_POST['name']; // Значения с html с атрибута name, которому задано имя name помещаем в переменную $name
    $email = $_POST['email']; // Значение с html с атрибута name, которому задано имя email, помещаем в переменную $email
    $phone = $_POST['phone']; // Значение с html с атрибута name, которому задано имя phone, помещаем в переменную $phone
    if(!empty($name) && !empty($email) && !empty($phone)) { // Если все переменные заполнены, то код перейдёт к отправке данных на почту
        $to = 'artemartyr9@gmail.com'; // Куда будет отправлятся сообщение
        $headers = 'Content-type: text/plain; charset = utf-8';  // Кадировка сообщения
        $message = 'Сообщение отправил: '.$name.'\nПочта заказчика: '.$email.'\nНомер телефона: '.$phone; // Само сообщение 
        $res = mail($to, $message, $headers); // Все резульаты помещяем в перменную $res
        if($res == true) { // Если перменная $res выдала true, то будет выдано сообщение, что заявка отправленная, и будет ссылка на возращение на главную страницу
            echo '<p>Заявка отправлена! Спасибо что выбрали нас</p>';
            echo '<a href="index.html">Нажмите что бы перейти на главную</a>';
        } else { // Если перменная $res выдала значение false, то будет выданно сообщение, что сообщение не отправленр, и будет ссылка на возвращение на главную страницу
            echo '<p>Ошибка сервера, заказ не отправлен!</p>';
            echo '<a href="index.html">Нажмите что бы перейти на главную</a>';
        }
    } else { // Если какая-то из переменных не заполненная, то выведится сообщение, что форма не заполненна
        echo '<p>Вы не заполнили форму!</p>';
    }
?>