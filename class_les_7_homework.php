<?php
/*1.Создать родительский (главный класс)
    Класс должен содержать 2 свойства
    Каждое свойство должно иметь геттеры и сеттеры
    должен содержать абстрактную функцию возведения в степень*/

//-родительский класс ( абстрактный )
abstract class UserName
    {
        public $user = 25;
        public $age = 17;

        public function setUser($name) //сеттер
        {
            $this->user = $name;
        }

        public function getUser()       //геттер
        {
            return $this->user;
        }

        public function setAge($age)     //сеттер
        {
            $this->age = $age;
        }

        public function getAge()          //геттер
        {
            return $this->age;
        }

        abstract public function increase($ex);  //абстрактная функция
    }


/*2. Создать 3 наследника родительского класса
Каждый наследник должен содержать одно свойство
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу
который выполняет одно математическое действие
с данными родителя и своими данными
Один наследник не должен быть наследуемым*/

//-Наследник 1 первого уровня ( не наследуемый )
final class Heir_1_Level_1 extends UserName
{
    public $experience = 15;

    public function setExperience($iq)  //сеттер
    {
        $this->experience = $iq;
    }
    public function getExperience()     //геттер
    {
        return $this->experience+$this->age; /* математическое действие
                                                с данными родителя ($age = 17)
                                                и своими данными ($experience = 15)*/
    }
    public function increase($ex)                          //Реализация абстрактной функции
    {
        return $this->increase = pow($ex, $this->age);
    }
}

$person = new Heir_1_Level_1;

//Математическое действие: Выводит сумму данных родительского класса ($age = 17) и своими данными ($experience = 15)
echo $person->getExperience() . '<br>';

//Реализация абстрактной функции ( $ex = 4 в степени $age = 17 )
echo $person->increase(4) . '<br>';


//-Наследник 2 первого уровня
class Heir_2_Level_1 extends UserName
{
    public $expert = 15;

    public function setExpert($iq)
    {
        $this->expert = $iq;
    }
    public function getExpert()
    {
        return $this->expert - $this->user;
    }
    public function increase($ex)
    {
        return $this->increase = pow($ex, $this->expert);
    }
}

$condition = new Heir_2_Level_1;

//-Математическое действие: Разница между переменной $expert = 1500 и переменной родительского класса $user = 25.
echo $condition->getExpert() . '<br>';

//Реализация абстрактной функции ( $ex = 2 в степени $expert = 15 )
echo $condition->increase(2);


//-Наследник 3 первого уровня
class Heir_3_Level_1 extends UserName
{
    public $accept = 180;

    public function setExp($iq)
    {
        $this->accept = $iq;
    }
    public function getExp()
    {
        return $this->accept * $this->age;
    }
    public function increase($ex)
    {
        return $increase = pow($ex, $this->accept);
    }
}

$condition = new Heir_3_Level_1;

//-Математическое действие: Произведение переменной $accept = 180 и переменной родительского класса $age = 17
echo $condition->getExp() . '<br>';

//Реализация абстрактной функции ( $ex = 3 в степени $accept = 180 )
echo $condition->increase(3) . '<br>';


/*3) Создать по 2 наследника от наследников первого уровня
Каждое свойство должно иметь геттер и сеттер
Наследники должны реализовать по одному методу который
выполняет одно математическое действие с данными родителя и
своими данными
И по одному методу который выполняет любое математическое
действие со свойством корневого класса и своим свойством
В случае если реализован наследник класса содержащего
абстрактную функцию то класс должен содержать реализацию абстракции*/

//-Первый наследник от наследника первого уровня ( класс Heir_2_Level_1 )
class A extends Heir_2_Level_1
{
    public $max = 77;
    public $fax = 87;
    public function setBar($qr)
    {
       $this->max = $qr;
    }
    public function getBar()
    {
        return $this->max / $this->expert;
    }
    public function setSum($br)
    {
        $this->fax = $br;
    }
    public function getSum()
    {
        return $this->fax - $this->age;
    }
}

$fun = new A;

//-Математическое действие со свойством родительского класса $expert = 15 и своим свойством $max = 77
echo $fun->getBar() . '<br>';

//-Математическое действие со свойством корневого класса $age = 17 и своим свойством $fax = 87
echo $fun->getSum() . '<br>';

//-Второй наследник от наследника первого уровня ( класс Heir_2_Level_1 )
class B extends Heir_2_Level_1
{
    public $m = 347;
    public $f = 671;
    public function setBar($q)
    {
        $this->m = $q;
    }
    public function getBar()
    {
        return $this->m * $this->expert;
    }
    public function setSum($br)
    {
        $this->f = $br;
    }
    public function getSum()
    {
        return $this->f + $this->age;
    }
}

$fun = new B;

//-Математическое действие со свойством родительского класса $expert = 15 и своим свойством $m = 347
echo $fun->getBar() . '<br>';

//-Математическое действие со свойством корневого класса $age = 17 и своим свойством $f = 671
echo $fun->getSum() . '<br>';


//-Первый наследник от наследника первого уровня ( класс Heir_3_Level_1 )
class C extends Heir_3_Level_1

{
    public $k = 4;
    public $l = 3;
    public function setLoad($x)
    {
        $this->k = ($x);
    }
    public function getLoad()
    {
        return pow($this->k,  $this->accept);
    }
    public function setSum($n)
    {
        $this->l = $n;
    }
    public function getSun()
    {
        return pow($this->l,  $this->age);
    }
}

$fun = new C;

//-Математическое действие со свойством родительского класса $accept = 180 и своим свойством $k = 4
echo $fun->getLoad() . '<br>';

//-Математическое действие со свойством корневого класса $age = 17 и своим свойством $l = 3
echo $fun->getSun() . '<br>';

//-Второй наследник от наследника первого уровня ( класса Heir_3_Level_1 )
class D extends Heir_3_Level_1

{
    public $c = 5.7;
    public $s = 6.7;
    public function setFar($point)
    {
        $this->c = $point;
    }
    public function getFar()
    {
        return $this->c ** $this->accept;
    }
    public function setBak($bp)
    {
        $this->s = $bp;
    }
    public function getBak()
    {
        return $this->s ** $this->age;
    }
}

$cat = new D;

//-Математическое действие со свойством родительского класса $accept = 180 и своим свойством $c = 5.7
echo $cat->getFar() . '<br>';

//-Математическое действие со свойством корневого класса $age = 17 и своим свойством $s = 6.7
echo $cat->getBak() . '<br>';

?>






