<?php
/* アクセスURL(Win):http://localhost/DT/board/board3.php
*
* 学習内容(データベースへの接続、データの取得と表示)
*/
 
// --- データベースに接続するための情報を定義 ---
$db_host = "localhost";    // データベースが動いてるホスト名
$db_name = "board_db";     // 接続したいデータベースの名前
$db_user = "board_user";   // データベースにログインするユーザー名
$db_pass = "board_pass";   // ユーザーパスワード
 
// --- データベースに接続する ---
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// mysql improved（MySQLに接続するためのPHP関数」の改良版）
// mysqli_connect関数: MySQLデータベースに接続するための関数です。引数として、ホスト名、ユーザー名、パスワード、データベース名を指定します。
//もし接続に成功した場合、MySQLサーバーとの接続を維持するための識別子となる接続リソースが返され、接続に失敗した場合は false が返されます。
//このリソースは、MySQLデータベースとの接続情報を保持し、データベース操作を実行するためのリソースです
// var_dump($link);
 
 
if ($link !== false) {
  $query = "SELECT id, name, contents FROM board";
  $res = mysqli_query($link, $query);
  // mysqli_query関数: MySQLデータベースにクエリを実行するための関数です。第一引数に接続リソース、第二引数にクエリを指定します。
  // 成功した場合、mysqli_resultオブジェクトを返します。失敗した場合、falseを返します。
  //var_dump($res);
 
  $data = [];
  while ($row = mysqli_fetch_assoc($res)) {
    // mysqli_fetch_assoc($res)は$resから1行分のデータをキーをカラム名に持った連想配列として取得して$rowに格納します。fgets関数に似ている。
    // fetch(取り出す) associative(連想配列)
    $data[] = $row;
  }
 
//    var_dump($data);
  // INSERT INTO board (name, contents) VALUES ('Nakata', 'PHP');
  arsort($data);
  //　エーアールソート関数: 連想配列のキーを基準にして、配列を降順に並び替えます。
  // var_dump($data);
 
} else {
  echo "データベースの接続に失敗しました";
}
 
mysqli_close($link);
//mysqli_close関数: MySQLデータベースとの接続を切断するための関数です。引数に切断する接続リソースを指定します。
 
?>
 
<!DOCTYPE html>
<html lang = "ja">
 
<head>
  <meta charset="utf-8">
  <title>掲示板</title>
</head>
<body>
  <form method="post" action="">
    名前<input type="text" name="name" value="">
    コメント<textarea name="comment" rows="4" cols="20"></textarea>
    <input type="submit" name="send" value="書き込む">
  </form>
<?php
  echo "id : name: contents <br>";
  foreach ($data as $val) {
    echo $val["id"]." " . $val["name"]. " ". $val["contents"]. "<br>"; //.結合演算子
  }
  //$data 配列に入っている複数のデータを、foreachで1件ずつ取り出し、それぞれの「id」「name」「contents」の値を取り出して、画面に表示する処理です。
 
?>
</body>
</html>
 