<?php
//http://localhost/DT/namespace/com/sample/Hoge.php
namespace com\sample;
require_once 'Foo.php';
$foo = new Foo();
class Hoge 
{
    public function __construct()
    {
        echo "this is hoge class<br>";
    }
}