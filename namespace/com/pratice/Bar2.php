<?php
//https://localhost/DT/namespace/com/pratice/Bar2.php
namespace com\pratice;
require_once 'Foo.php';
$hoge = new Hoge();
class Bar 
{
    public function __construct()
    {
        echo "this is bar class<br>";
    }
}