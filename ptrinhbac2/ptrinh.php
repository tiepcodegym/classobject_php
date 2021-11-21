<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getter()
    {
        echo 'a= ' . $this->a . '<br>';
        echo 'b= ' . $this->b . '<br>';
        echo 'c= ' . $this->c . '<br>';
    }

    public function getDiscriminant()
    {
        return (($this->b * $this->b) - (4 * $this->a * $this->c));
    }

    public function getRoot1()
    {
        $delta = $this->getDiscriminant();
        if ($delta < 0) {
            echo 'The equation has no real roots';
        } else if ($delta == 0) {
            echo 'The equation has one root '.((-$this->b)/(2*$this->a));
        }else {
            echo 'The equation has two root '.((-$this->b+sqrt($delta))/2*$this->a).' and '.((-$this->b-sqrt($delta))/2*$this->a);
        }
    }

}
