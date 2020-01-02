<?php

// class contohstatic
// {
//     public static $angka = 1;

//     public function hello()
//     {
//         return " Hello World " . self::$angka++ . "<br>";
//     }
// }

// echo contohstatic::$angka;
// echo "<br>";
// echo contohstatic::hello();
// echo "<hr>";


class contohstatic2
{
    public static $angka = 1;

    public function hello()
    {
        return " Hello World " . self::$angka++ . "<br>";
    }
}

$obj = new contohstatic2;
echo $obj->hello();
echo $obj->hello();
echo $obj->hello();

echo "<hr>";

$obj2 = new contohstatic2;
echo $obj2->hello();
echo $obj2->hello();
echo $obj2->hello();
