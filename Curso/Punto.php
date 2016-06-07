<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:57 PM
 */

namespace Curso;


class Punto
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function __toString()
    {
        return "Punto [".$this->getX().", ".$this->getY()."]";
    }

    public function distancia(Punto $p)
    {
        return sqrt( pow($this->getX() - $p->getX(),2) + pow($this->getY() - $p->getY(),2));
    }

}