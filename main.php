<?php
//    Импортируются необходимые классы
require_once('classes/Farm.php');
require_once('classes/Caw.php');
require_once('classes/Chicken.php');

use farm\Caw;
use farm\Chicken;
use farm\Farm;

//    Создание объекта класса Farm
$farm = new Farm();

//    Объявление списков животных
$caws = $farm->addAnimals(10, Caw::class);
$chickens = $farm->addAnimals(20, Chicken::class);

echo "В хлеву " . count($caws) . " коров и " . count($chickens) . " куриц \n";

//    Получение продукции за неделю
$milk = $farm->getResources($caws);
$eggs = $farm->getResources($chickens);

echo "За неделю получено молока " . $milk . ".л, яиц " . $eggs . ".шт \n";

//    Добавление животных к уже имеющимся
$caws = array_merge($caws, $farm->addAnimals(1, Caw::class));
$chickens = array_merge($chickens, $farm->addAnimals(5, Chicken::class));

echo "В хлеву " . count($caws) . " коров и " . count($chickens) . " куриц \n";

//    Получение продукции за неделю
$milk = $farm->getResources($caws);
$eggs = $farm->getResources($chickens);

echo "За неделю получено молока " . $milk . ".л, яиц " . $eggs . ".шт \n";

