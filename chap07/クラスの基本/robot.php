<?php
class Robot
{
  public string $name;
  public int $energy = 100;
  const FUEL = 10;

  function __construct($name)
  {
    $this->name = $name;
  }

  public function run()
  {
    echo $this->name . "が走る！<br>", PHP_EOL;
    $this->energy -= self::FUEL;
    echo "エネルギーを10消費した<br>";
    echo "残りエネルギー" . $this->energy . "<br>", PHP_EOL;
  }
}

$robo1 = new Robot('太郎');
$robo1->run();
$robo2 = new Robot('花子');
$robo2->run();
