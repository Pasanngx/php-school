<?php
//Bootstrap.class.php
//  アクセスURL：http://localhost/DT/board/bootstrap.php
namespace board;
require_once dirname(__FILE__). '/../vendor/autoload.php';
class Bootstrap
{
    const APP_DIR = "c:/xampp/htdocs/DT/";//アプリケーションのルートディレクトリ
    const DB_HOST = 'localhost';
    const DB_NAME = 'board_db';
    const DB_USER = 'board_user';
    const DB_PASS = 'board_pass';//DB接続に必要な情報


    const TEMPLATE_DIR = self::APP_DIR . 'templates/board/';//Twigテンプレートファイルの配置場所
    const CACHE_DIR = false;//self::APP_DIR . 'templates_c/';//Twigのキャッシュファイルの保存場所。falseを指定するとキャッシュを無効にする
    
    public static function loadClass($class)//オートローダーとして動作するメソッド
    {
        $path = str_replace("\\", '/', self::APP_DIR . $class . '.class.php');//クラス名からクラスファイルのパスを生成
        require_once $path;//クラスファイルを読み込む
    }
}
// これを実行しないとオートローダーとして動かない
spl_autoload_register([
    'board\Bootstrap',
    'loadClass',    
]);
require_once dirname(__FILE__). '/../db';//DB接続情報を読み込む
$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);//