<?php
//hhtps://localhost/DT/namespace/com/pratice/Bar.php
namespace com\pratice;
require_once 'Foo.php';
$hoge = new \com\sample\Hoge();
class Bar 
{
    public function __construct()
    {
        echo "this is bar class<br>";
    }
}