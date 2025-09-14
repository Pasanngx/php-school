<?php

//  * ファイル名:board5.php
//  * アクセスURL: http://localhost/DT/board/board5.php
namespace board;

require_once dirname(__FILE__). '/bootstrap.class.php';//

use board\Bootstrap;//名前空間を指定してBootstrapクラスを使う
use board\Database;//名前空間を指定してDatabaseクラスを使う
$db = new Database(Bootstrap::DB_HOST, Bootstrap::DB_USER, Bootstrap::DB_PASS, Bootstrap::DB_NAME);//

// Twigを表示するための設定 (Twigファイルの配置場所や、キャッシュファイルの保存場所を指定。)
$loader = new \Twig_Loader_Filesystem(Bootstrap::TEMPLATE_DIR);
$twig = new \Twig_Environment($loader, [
'cache' => Bootstrap::CACHE_DIR
]);

// Twigのバージョンが2.7以降の場合は次のような書き方が推奨される
// $loader = new \Twig\Loader\FilesystemLoader(Bootstrap::TEMPLATE_DIR);
// $twig = new \Twig\Environment($loader, [
// 'cache' => Bootstrap::CACHE_DIR
// ]);

$msg = "";
$err_msg = "";
if (isset($_POST['send']) === true) {
$name = $_POST['name'];
$contents = $_POST['contents'];//フォームから送信されたデータを取得

if ($name !== "" && $contents !== "") {//名前とコメントが空でない場合
$query = "INSERT INTO board (
name,
contents
) VALUES (
".$db->str_quote($name).",
".$db->str_quote($contents).")";
$res = $db->execute($query);

if ($res !== false) {
$msg = '書き込みに成功しました';
} else {
$err_msg = '書き込みに失敗しました';
}
} else {
$err_msg = '名前とコメントを記入してください';
}
}

$query = "SELECT
id,
name,
contents
FROM
board";

$data = $db->select($query);

$db->close();

// 変数の設定
$context;
$context['msg'] = $msg;
$context['err_msg'] = $err_msg;
$context['data'] = $data;

// データ($context)を渡して、指定したTwigファイル(board5.html.twig)を表示
$template = $twig->loadTemplate('board5.html.twig');
$template->display($context);

// 下記のような記述でも可
//echo $twig->render('board5.html.twig', $context);