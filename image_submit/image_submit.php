<?php
<?php
//アクセスURL(Win):http://localhost/DT/image_submit/image_submit.php
 
var_dump ($_POST);
 
if (isset($_POST["send"]) === true) { //POSTメソッドで送られたデータの中に send というキーが存在していたら、処理を実行する
 
  // var_dump($_FILES); //連想配列
 
  $tmp_image = $_FILES["image"];  //[キー名]はinputのname属性で指定した名前、$_FILE連想配列から$_FILE["image"]だけ出して扱いやすくする。
 
  if (is_uploaded_file($tmp_image["tmp_name"]) === true) {
    // is_uploaded_file関数: HTTP　POSTでアップロードされたか調べる。(ターミナルから直接ファイルを送信したり「正規ルートを通らない不正アクセス」から守る)
    $image_info = getimagesize($tmp_image["tmp_name"]);
    // getimagesize関数: 画像ファイルのサイズを取得するためのPHP関数です。これは、単にファイルのサイズ（バイト数）を取得するのではなく、画像の幅と高さ、そして形式といった、画像に関するメタ情報を調べることができます。
    // 今回は、mimeを取得するためgetimagesizeを使用する。
    //　var_dump($image_info);
    $image_mime = $image_info["mime"];
    // mimeとは、Multipurpose Internet Mail Extensionsの略で、インターネット上で送受信されるファイルの種類を示す標準的な方法です。データの形式をタイプとサブタイプで指定します。例えばtext/html、image/jpegなどです。
    // なぜMIMEが重要か
    // ファイルのアップロード処理において、拡張子（.jpgや.pdf）は簡単に変更できますが、MIMEタイプはファイル自体のヘッダー情報に含まれるため、より信頼性の高い識別子となります。
    // 例えば、ユーザーがWebサイトに写真をアップロードする場合を考えます。
    // 受け取り時: サーバーは、アップロードされたファイルのMIMEタイプが**image/jpeg**であることを確認します。
    // 送信時: サーバーは、この画像ファイルをブラウザに返す際、HTTPヘッダーに**Content-Type: image/jpeg**を含めます。これにより、ブラウザは「これは画像だ」と認識し、画像ビューアとして表示します。
    // このように、MIMEタイプは、インターネット上のあらゆるデータ通信において、**「このデータは何であるか」**を正確に伝えるための、非常に重要な役割を担っています。
   
 
    if ($tmp_image["size"] > 1048576) { //1,048,576バイト(1KB(1,024B),1MB(1024KB(1,048,576B),1GB(1,024MB(1,073,741,824B)))
      echo "アップロードできる画像のサイズは、1MBまでです";
 
    } elseif (preg_match('/^image\/jpeg$/', $image_mime) === 0) {
      echo "アップロードできる画像の形式は、JPEG形式だけです";
 
    } elseif (move_uploaded_file($tmp_image["tmp_name"], './upload_' . time(). '.jpg') === true) {
      //move_uploaded_file関数　第一引数にサーバー上の一時ファイルの場所、第二引数に保存したいディレクトリ　+　名前を指定する。
      //ファイルが ./ （カレントディレクトリ）に upload_ + 現在のタイムスタンプ + .jpg という名前で保存されます。
     
      echo "アップロードが完了しました";
 
    }
 
  }
}
 
 
?>
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>画像アップロード</title>
</head>
 
<body>
  <form method="post" action="" enctype="multipart/form-data">
    <!--enctype:フォームの送信方式（エンコーディングタイプ） を指定している。mimeタイプ multipart/form-data"はテキストだけじゃなくて画像も一緒に送るよという宣言。-->
    <!--enctypeのデフォルトは、application/x-www-form-urlencoded　フォームのデータを key=value&key2=value2 形式で送信。連想配列っぽく$_POST['key']でアクセス可能-->
    <input type="file" name="image">
    <input type="submit" name="send" value="送信">
  </form>
</body>