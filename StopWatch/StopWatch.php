<?php
class StopWatch{
    private $endTime;
    private $startTime;

    public function __construct(){
        $this->startTime=date("Y-m-d H:i:s") ;
    }
    public function start(){
        $this->startTime=date("Y-m-d H:i:s") ;
    }
    public function stop(){
        $this->endTime=date("Y-m-d H:i:s") ;
    }
    public function getElapsedTime(){
        $hours=substr($this->startTime,0,2);
        $hours1=substr($this->endTime,0,2);
        $minute=substr($this->startTime,3,2);
        $minute1=substr($this->endTime,3,2);
        $second=substr($this->startTime,6,2);
        $second1=substr($this->endTime,6,2);
        $hours= (int)$hours;
        $hours1= (int)$hours1;
        $minute= (int)$minute;
        $minute1= (int)$minute1;
        $second= (int)$second;
        $second1= (int)$second1;
        $hours1-=$hours*60*60;
        $minute1-=$minute*60;
        $second1-=$second;
        $second1+=$hours1+$minute1;
        echo 'Đã qua : '.$second1.' S';
    }
}
