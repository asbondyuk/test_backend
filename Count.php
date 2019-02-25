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
