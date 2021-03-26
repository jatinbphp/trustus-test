<?php

class Test1
{
    private $valueArray;

    /**
     * [addValue description]
     *
     * @return  [type]  [description]
     */
    public function addValue($value)
    {
        if (filter_var($value, FILTER_VALIDATE_INT) === false) {
            return "Your variable is not an integer";
        } else {
            return $this->valueArray[$value] = $value;
        }
    }

    /**
     * [increaseAll description]
     *
     * @return  [type]  [description]
     */
    public function increaseAll()
    {
        $data = $this->valueArray;
        foreach ($data as $key => $val) {
            $this->valueArray[$key] = ($val + 1);
        }
    }

    /**
     * [showValue description]
     *
     * @return  [type]  [description]
     */
    public function showValue()
    {
        echo "<pre>";
        print_r($this->valueArray);
    }
}

$test1 = new Test1();
$test1->addValue(5);
$test1->addValue(6);
echo "Before Increase";
$test1->showValue();
echo "After 1 Increase";
$test1->increaseAll();
$test1->showValue();
echo "After 2 Increase";
$test1->increaseAll();
$test1->showValue();
echo "After 3 Increase";
$test1->increaseAll();
$test1->showValue();
