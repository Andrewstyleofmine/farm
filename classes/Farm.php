<?php


namespace farm {
    //    Класс Farm, который необходим для добавления животных и получения продукции по спискам животных
    class Farm
    {
        //    Список животных
        protected $animals;

        //    Ресурсы
        protected $resources;

        //    Метод добавления животных (указывается их количество и тип)
        public function addAnimals($count, $animal): array
        {
            $this->animals = [];
            for ($i = 0; $i < $count; $i++) {
                $this->animals[] = new $animal;
            }
            return $this->animals;
        }

        //    Метод подсчёта полученной продукции (указывается список животных)
        public function getResources($animals): int
        {
            $this->resources = 0;
            for ($i = 0; $i < 7; $i++) {
                for ($j = 0; $j < count($animals); $j++) {
                    $this->resources += $animals[$j]->getResource();
                }
            }
            return $this->resources;
        }
    }
}


