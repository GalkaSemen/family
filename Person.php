<?php
class Person{
  private $name;
  private $family;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $family, $age, $mother, $father){
    $this->name = $name;
    $this->family = $family;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }

  function sayHi($name){
    return "Hi $name, I`m " . $this->name;
  }

  function setHp($hp){
    if ($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }

  function getHp(){
    return $this->hp;
  }

  function getName() {
    return $this->name;
  }

  function getMother() {
    return $this->mother;
  }

  function getFather() {
    return $this->father;
  }

  function getInfo() {
    if ($this->getName() === 'Влад'){
			return "<h2>Моя семья...</h2><br>" . 
      "Мое имя: " . $this->getName() . "<br>
      Мама: " . $this->getMother()->getName() . "<br>
      Папа: " . $this->getFather()->getName();
		} else if ($this->getName() ==='Ольга'){
			return "<br>Бабушка по маме: " . $this->getMother()->getName() . 
      "<br>Дедушка по маме: " . $this->getFather()->getName();
		} else {
			return "<br>Бабушка по папе: " . $this->getMother()->getName() . 
      "<br>Дедушка по папе: " . $this->getFather()->getName();
		}
  }
}
//! Здоровье человека не может быть более 100


$nina = new Person("Нина", "Иванова", 67, "nina", "iva");
$ivan = new Person("Иван", "Иванов", 70, "ivava", "iva");

$luda = new Person("Люда", "Дронова", 69, "luddr", "lud");
$victor = new Person("Виктор", "Дронов", 71, "vicdr", "vic");

$olga = new Person("Ольга", "Дронова", 42, $nina, $ivan);
$egor = new Person("Георгий", "Дронов", 44, $luda, $victor);
$vlad = new Person("Влад", "Дронов", 20, $olga, $egor);


$family = [$vlad, $olga, $egor];
for($i = 0; $i < count($family); $i++){
	echo $family[$i]->getInfo();
};
