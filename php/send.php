<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['surname'])&&$_POST['surname']!="")&&(isset($_POST['E-Mail'])&&$_POST['E-Mail']!="")&&(isset($_POST['message'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'kristinenyunko@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратная связь'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['surname'].'</p>                        
                        <p>Телефон: '.$_POST['E-Mail'].'</p>                        
                        <p>Телефон: '.$_POST['message'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>