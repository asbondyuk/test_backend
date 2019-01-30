<?php

/*
    $c1 = new Count;
    $c1 -> setCount('7');
    echo $c1->getCount();

    $c2 = new Count;
    $c2 -> setCount('15');
    echo $c2->getCount();
    */

//Количество проданного товара дистрибьютором
class Count
{
    private $count;

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        if ($count>0) {$this->count = $count;}
        else {echo 'Операция не выполнена.Значение должно быть больше нуля';}
    }
}
