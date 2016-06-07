<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:47 PM
 */

namespace Curso;

require_once 'Punto.php';

class Cuadrado
{
    private $alto;
    private $origen;

    public function __construct(Punto $origen, $alto)
    {
        $this->$alto = $alto;
        $this->$origen = $origen;
    }

    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @return mixed
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * @param mixed $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    /**
     * @param mixed $alto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    }

    public function area()
    {
        return pow($this->alto, 2);
    }

    public function perimetro()
    {
        return 4 * $this->alto;
    }

    public function __toString()
    {
        return "Cuadrado Origen [".$this->origen."] Alto [".$this->alto."]";
    }
}