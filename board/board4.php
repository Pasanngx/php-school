<?php
/*アクセスURL(Win):http://localhost/DT/board/board4.php
*
* 学習内容(データベースへの接続、データの挿入、取得、表示)
*/
echo "<pre>";
 
// --- データベースに接続するための情報を定義 ---
$db_host = "localhost";    // データベースが動いてるホスト名
$db_name = "board_db";     // 接続したいデータベースの名前
$db_user = "board_user";   // データベースにログインするユーザー名
$db_pass = "board_pass";   // ユーザーパスワード
 
// --- データベースに接続する ---
$link = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// mysqli_connect関数: MySQLデータベースに接続するための関数です。引数として、ホスト名、ユーザー名、パスワード、データベース名を指定します。
//もし接続に成功した場合、MySQLサーバーとの接続を維持するための識別子となる接続リソースが返され、接続に失敗した場合は false が返されます。
//このリソースは、MySQLデータベースとの接続情報を保持し、データベース操作を実行するためのリソースです
//var_dump($link);
 
 
if ($link !== false) {
  $msg = "";
  $err_msg = "";
 
  if (isset($_POST["send"]) === true) {
    //$_POST["send"] が存在しているかどうかを確認
    $name = $_POST["name"];
    $contents = $_POST["contents"];
 
    if($name !== "" && $contents !== "") {
      $query = " INSERT INTO board ( "
      . "name,"
      . "contents"
      . ") VALUES ("
      . "'". mysqli_real_escape_string($link, $name). "',"
      // mysqli_real_escape_string: エスケープ処理(無害化)　SQL文の中で使われる文字（' や "、\ など）は、SQLの構文として特別な意味を持ちます。
      // これらが意図しない方法(SQLインジェクション攻撃)で使われないように、エスケープします。
      // SQLインジェクション攻撃とは、悪意のあるユーザーがウェブアプリケーションの入力フィールド（フォームなど）に特殊なSQLコードを挿入し、それを実行させて不正にデータベースにアクセスしたり、操作したりする攻撃です。
      // SELECT * FROM users WHERE username = '' OR 1=1 -- password = 'password';
     
     
      . "'". mysqli_real_escape_string($link, $contents). "'"
      . ")";
 
      $res = mysqli_query($link, $query);
      // mysqli_query関数: MySQLデータベースにクエリを実行するための関数です。第一引数に接続リソース、第二引数にクエリを指定します。
      // 命令系のクエリは成功した場合、mysqli_resultオブジェクトではなくtrueを返します。失敗した場合、falseを返します。
      // var_dump($res);
 
      if ($res !== false) {
        $msg = "書き込みに成功しました";
      } else {
        $err_msg = "書き込みに失敗しました";
      }
    } else {
      $err_msg = "名前とコメントを記入してください";
    }
  }
 
  $query = "SELECT id, name, contents FROM board";
  $res = mysqli_query($link, $query);
   // mysqli_query関数: MySQLデータベースにクエリを実行するための関数です。第一引数に接続リソース、第二引数にクエリを指定します。
  // mysql improved（MySQLに接続するためのPHP関数」の改良版）
  // 問い合わせ系のクエリなので、成功した場合、mysqli_resultオブジェクトを返します。失敗した場合、falseを返します。
  // var_dump($res);
 
  $data = [];
  while ($row = mysqli_fetch_assoc($res)) {
    // mysqli_fetch_assoc($res)は$resから1行分のデータをキーをカラム名に持った連想配列として取得して$rowに格納します。fgets関数に似ている。
    // fetch(取り出す) associative(連想配列)
    array_push($data, $row);
  }
 
  arsort($data);
  //　エーアールソート関数: 連想配列のキーを基準にして、配列を降順に並び替えます。
 
} else {
  echo "データベースの接続に失敗しました";
}
 
mysqli_close($link);
//データベース接続を閉じます。
echo "</pre>"
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <form method="post" action="">
    名前<input type="text" name="name" value="">
    コメント<textarea name="contents" rows="4" cols="20"></textarea>
    <input type ="submit" name="send" value="書き込む">
  </form>
  <?php
    if ($msg !== "") echo "<p>". $msg. "</p>";
    if ($err_msg !== "") echo "<p style=color:#f00;>". $err_msg. "</p>";
    foreach ($data as $key => $val) {
      echo $val["name"]. " ". $val["contents"]. "<br>";
      //$data 配列に入っている複数のデータを、foreachで1件ずつ取り出し、それぞれの「name」「contents」の値を取り出して、画面に表示する処理です。
    }
  ?>
</body>
</html>
 