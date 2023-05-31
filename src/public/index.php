<?php

use Project\Newproject\Classes\Singleton;


$singleton1 = Singleton::getInstance();
$singleton1->doSomething();

$singleton2 = Singleton::getInstance();
$singleton2->doSomething();

// Перевірка, що обидва об'єкти Singleton посилаються на один і той самий об'єкт
if ($singleton1 === $singleton2) {
    echo "Обидва об'єкти посилаються на один і той самий об'єкт Singleton.";
} else {
    echo "Помилка! Об'єкти Singleton посилаються на різні об'єкти.";
}

