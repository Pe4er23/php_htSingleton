<?php

namespace Project\Newproject\Classes;

class Singleton {
    private static $instance;

    private function __construct() {
        // Приватний конструктор, щоб заборонити створення об'єкту Singleton ззовні
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function doSomething(): void
    {
        echo "Виконую деякі дії...".PHP_EOL;
    }
}