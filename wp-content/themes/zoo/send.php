<?php
    $to = 'plahotin_s@mail.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = $_POST['subject'];
    $notspam = $_POST['notspam'];

    $userName  = $_POST['name'];
    $userSurname  = $_POST['surname'];
    $userEmail = $_POST['email'];
    $userAddress = $_POST['address'];
    $userMessage = $_POST['message'];

    if ($notspam == 'Not spam') {
        // $notspam = 'Не бот';
    } else {
        // $notspam = 'Бот';
        exit('Exit');
    };
    $message = '
    <html>
        <head>
            <title>' . $subject . '</title>
        </head>
        <body>
            <h2 style="">Заявка с формы: ' . $subject . '</h2>
            <p>Контактное лицо: ' . $userSurname . ' ' . $userName . '</p>
            <p>Проживакет по адресу: ' . $userAddress . '</p>
            <p>E-Mail для ответа : ' . $userEmail . '</p>
            <p>Cообщение: ' . $userMessage . '</p>
        </body>
    </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: сайт minskzoo.by <order@buhone.ru>\r\n"; //Наименование и почта отправителя

    // mail($to, $subject, $message, $headers);
    wp_mail( $to, $subject, $message, $headers );


    // if (mail($to, $subject, $message, $headers)) {
    //     // mail($userEmail, $subject, $message_2, $headers);
    //     // echo $notspam;
    // } else {
    //     // echo 'error';
    // }

?>
