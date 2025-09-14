<?php

/*
 * ファイルパス: C:\xampp\htdocs\DT\autoload\index.php
 * ファイル名: index.php
 * アクセスURL: http://localhost/DT/autoload/index.php
 */
class ClassLoader
{
    public static function loadClass($class)
    {
        require_once dirname(__FILE__) . '\\' . $class . '.class.php';
    }
}

// これを実行しないとオートローダーとして動かない
spl_autoload_register('ClassLoader::loadClass');
//If Foo is not loaded, PHP will call ClassLoader::loadClass("Foo").
$foo = new Foo();

$hoge = new Hoge();

?>