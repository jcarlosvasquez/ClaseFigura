<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 7:33 PM
 */

namespace Curso;

require_once 'Punto.php';
require_once 'Figura.php';

class Circulo extends Figura //le decimos de que clase hereda
{
    private $radio;

    public function __construct(Punto $origen, $radio)
    {
        parent::__construct($origen); //Llamamos al constructor del padre
        $this->radio = $radio;
    }

    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function perimetro()
    {
        return 2 * M_PI * $this->getRadio();
    }

    public function area()
    {
        return M_PI * pow($this->getRadio(), 2);
    }

    public function __toString()
    {
        return "Circulo ( punto[".$this->origen."], radio[".$this->radio."])";
    }
}