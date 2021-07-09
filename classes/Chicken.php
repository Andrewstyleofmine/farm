<?php


namespace farm {
    //    Импорт класса Animal
    require_once('Animal.php');

    //    Клаас Chicken, который наследует абстрктный класс Animal
    class Chicken extends Animal
    {
        //    Метод получения яиц
        public function getResource(): int
        {
            return mt_rand(0, 1);
        }

        //    При создании объекта живоному присваивается уникальный идентификатор
        public function __construct()
        {
            return $this->animal_id = parent::$id++;
        }
    }
}


