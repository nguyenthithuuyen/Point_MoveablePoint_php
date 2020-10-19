<?php
include_once ('Point.php');
include_once ('MovablePoint.php');
$point=new  Point(1,3);
 $point->toString();
$movablePoint=new MovablePoint(2,2,5,6);
 $movablePoint->move();
 $movablePoint->toString();