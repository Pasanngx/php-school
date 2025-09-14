<?php
//http://localhost/DT/namespace/com/sample/Foo.php
namespace com\sample;
require_once 'Hoge.php';
$hoge = new Hoge();
class Foo 
{
    public function __construct()
    {
        echo "this is foo class write just now<br>";
    }
}