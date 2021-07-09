<?php


namespace farm {
    //    Импорт класса Animal
    require_once('Animal.php');
    //    Клаас Caw, который наследует абстрктный класс Animal
    class Caw extends Animal
    {
        //    Метод получения молока
        public function getResource(): int
        {
            return mt_rand(8, 12);
        }

        //    При создании объекта живоному присваивается уникальный идентификатор
        public function __construct()
        {
            return $this->animal_id = parent::$id++;
        }
    }
}


