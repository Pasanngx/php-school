<?php 
/// *アクセスURL(win):http://localhost/DT/get/get.php
var_dump($_GET);
// $_GET: X--/x--グローバル変数(定義済み変数)の一つ、連想配列として使用する。
$data = [
    '渡部',
    '佐藤',
    '中田'
];
$id = (isset($_GET['id']) == true) ? $_GET['id'] : "";
if ($id !== '') echo $data[$id];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</title>
</head>
<body>
<p>
<a href="http://localhost/DT/get/get.php?id=0">クリックすると渡辺さんが表示されます。</p>
</p>
<p>
<a href="http://localhost/DT/get/get.php?id=1">クリックすると佐藤さんが表示されます。</p>
</p>
<p>
<a href="http://localhost/DT/get/get.php?id=2">クリックすると田中さんが表示されます。</p>
</p>
</body>
</html>