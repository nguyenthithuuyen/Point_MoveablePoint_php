<?php
include_once('Point.php');

class MovablePoint extends Point
{
    public $xSpeed = 0;
    public $ySpeed = 0;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        parent::__construct($x, $y);
    }

    /**
     * @return int
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param int $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return int
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param int $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed()
    {
        $this->xSpeed;
        $this->ySpeed;
    }

    public function getSpeed($array)
    {
        $array = [$this->xSpeed, $this->ySpeed];
        return $array;

    }

    public function toString()
    {

        parent::toString();
        echo 'speed= '. $this->xSpeed . ' , ' . $this->ySpeed;

    }


    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
    }

}
