<?php


namespace App;


class Product
{
    protected $name;
    protected $cost;

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function name()
    {
        return 'Fallout 4';
    }
    public function cost()
    {

        return $this->cost;
    }

}
