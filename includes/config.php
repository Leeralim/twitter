<?php
//имя сайта
define('SITE_NAME', 'Twitter');
//адрес нашего сайта, чтобы формировалась правитльная ссылка. перемернная СЕРВЕР это глобальный массив, который содержит в себе ключ - н же домен-адрес нашего сайта (localhost)
define('HOST', 'http://' . $_SERVER['HTTP_HOST']);
//укажем комп где будет БД
define('DB_HOST', 'localhost');
//имя БД
define('DB_NAME', 'twitter');
//логин под которым мы заходим в пхпмуадмин
define('DB_USER', 'root');
//пароль
define('DB_PASS', 'root');


?>