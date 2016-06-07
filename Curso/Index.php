<?php
/**
 * Created by PhpStorm.
 * User: devteam
 * Date: 6/6/16
 * Time: 6:04 PM
 */

namespace Curso;

require_once 'Punto.php';
require_once 'Circulo.php';
require_once 'Cuadrado.php';

class Index
{
    public static function pruebaSalida()
    {
        phpinfo();
    }

    public function pruebaMetodo()
    {
        echo "<h1> Hello World </h1>";
    }
}

//$index = new Index();
//$index ->pruebaMetodo();

$p1 = new Punto(1,1);

//var_dump($p1);
//die; //La ejecución se acaba aquí

$p2 = new Circulo($p1, 10);

$p3 = new Cuadrado($p1, 20);

echo $p1;
echo '<br>';

echo $p2;
echo '<br>';

echo $p3;
echo '<br>';


//Index::pruebaSalida();