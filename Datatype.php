<?php

$var1 = "Mohammed"; // String
$var2 = 100; // Integer
$var3 = 10.3; // double
$var4 = array(
    'A' => '1',
);  // array
$var5 = false; // boolean
$var6 = null; // null

class Book {

    function Book(){
        $this->genre = "Adventure";
    }
}

$var7 = new Book(); // object
$var8 = "Resources"; //It's about database

echo "<h1>DataType</h1>";
echo gettype($var1) . "<br/>";
echo gettype($var2) . "<br/>";
echo gettype($var3) . "<br/>";
echo gettype($var4) . "<br/>";
echo gettype($var5) . "<br/>";
echo gettype($var6) . "<br/>";
echo gettype($var7) . "<br/>";
echo gettype($var8) . "<br/>";

echo "<h1>Var Dumb</h1>";
echo var_dump($var1) . "<br/>";
echo var_dump($var2) . "<br/>";
echo var_dump($var3) . "<br/>";
echo var_dump($var4) . "<br/>";
echo var_dump($var5) . "<br/>";
echo var_dump($var6) . "<br/>";
echo var_dump($var7) . "<br/>";
echo var_dump($var8) . "<br/>";