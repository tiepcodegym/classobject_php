<?php

class Rectangular
{
    public $Width;
    public $Length;

    public function __construct($width,$length){
        $this->Width=$width;
        $this->Length=$length;
    }
    public function area()
    {
        $area = $this->Width * $this->Length;
        return $area;
    }

    public function Perimeter()
    {
        $Perimeter = ($this->Width + $this->Length)*2;
        return $Perimeter;
    }

    public function Display()
    {
        for ($i = 0; $i < $this->Width; $i++) {
            echo '*&nbsp;&nbsp;&nbsp;';
        }
        echo '<br>';
        for ($j = 1; $j < $this->Length - 1; $j++) {
            echo '*';
            for ($i = 1; $i < $this->Width - 1; $i++) {
                echo '&ensp;&ensp;&ensp;';
            }
            echo '*'.'<br>';
        }
        for ($i =0; $i < $this->Width; $i++) {
            echo '*&nbsp;&nbsp;&nbsp;';
        }

    }
}
?>