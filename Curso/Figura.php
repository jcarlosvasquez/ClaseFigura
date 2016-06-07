<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:58 PM
 */

namespace Curso;

require_once 'Punto.php';

class Figura
{
    protected $origen;

    private static $numFiguras = 0;

    public function __construct(Punto $origen)
    {
        $this->origen = $origen;
        self::$numFiguras++;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }
    
    public function __toString()
    {
        return "Punto [".$this->getX().", ".$this->getY()."]";
    }
}