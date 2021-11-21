<?php

class Fan
{
    private $SLOW, $MEDIUM, $FAST, $on, $speed, $radius, $color;

    public function __construct()
    {
        $this->SLOW = 1;
        $this->MEDIUM = 2;
        $this->FAST = 3;
        $this->speed = 'SLOW';
        $this->radius = 5;
        $this->color = 'blue';
        $this->on = false;
    }

    function getSpeed()
    {
        echo $this->speed.'<br>';
    }

    function getradius()
    {
        echo $this->radius.'<br>';
    }

    function getcolor()
    {
        echo $this->color.'<br>';
    }

    function geton()
    {
        if($this->on){
            echo 'fan is on';
        }else{
            echo 'fan is off';
        }
    }
    function setSpeed($num)
    {
        if ($num=$this->SLOW){
            $this->speed='SLOW';
        };
        if ($num=$this->MEDIUM){
            $this->speed='MEDIUM';
        };
        if ($num=$this->FAST){
            $this->speed='FAST';
        };
    }

    function setradius($num)
    {
         $this->radius=$num;
    }

    function setcolor($num)
    {
         $this->color=$num;
    }

    function seton()
    {
        if($this->on){
            $this->on=false;
        }else{
            $this->on=true;
        }
    }
    function toString(){
        if ($this->on){
            echo $this->speed.', '.$this->color.', '.$this->radius.', '.'fan is on'.'<br>';
        }else{
            echo $this->color.', '.$this->radius.', '.'fan is off'.'<br>';
        }
    }
}
