<?php
include ('Fan.php');
$fan1=new Fan();
$fan2=new Fan();
$fan1->toString();
$fan2->setSpeed(3);
$fan2->getradius();
$fan2->setradius(7);
$fan2->seton();
$fan2->toString();