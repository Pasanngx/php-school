
<!-- // 7.4 / x/a1 : http://localhost/DT/javascript/form2.php -->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> javascript</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./sample2.js"></script>
    </head>
    <style>
    #area {
    background-color:#ee82ee;
    width:50px;
    }
    </style>
    <body>
    <form method="post" action=""> 
    名前<input id="name_id" type="text" name="name" value=""><br>
    <input id="click_id" type="button" name="click" value="クリック">
    <br>
    <input id="check_id" type="button" name="check" value="チェック">
    <br>
    </form>
    <div id="write"></div>
    <div id="area">hogs</div>
    </body>
</html>