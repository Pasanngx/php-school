
<?php
 /// *アクセスURL(win):http://localhost/DT/javascript/form.php -->
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>javascript</title>
    <script src="./sample.js"></script>
    <script>
    /*
    function button_click()
    {
    alert('クリック');
    }
    function button_check()
    {
    var name = document.getElementById('name_id'),value;
    if (name == '') {
    alert('名前が入力されていません');
    }
    document.getElementById('write'),innerHTML = name;
    alert('入力された名前は + name + 'です');
    }
    }
    */
    </script>
<body>
  <form method="post" action="">
    名前<input id="name_id" type="text" name="name" value=""><br>
    <!-- idは、JavaScript、cssで特定のHTML要素を一意に特定・取得するために使います。 -->
    <input type="button" name="click" value="クリック" onclick="button_click();"><br>
    <!-- onclickはHTMLのイベント属性になります。値には JavaScriptのコードを指定します。 -->
    <input type="button" name="check" value="チェック" onclick="button_check();"><br>
  </form>
  <div id="write"></div>
</body>
 
</html>