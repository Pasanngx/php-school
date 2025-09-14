<?php
// <!-- アクセスURL(Win)：http://localhost/DT/csv/csv.php -->
echo "<pre>";
$file = new SplFileObject("read.csv");
$file->setFlags(SplFileObject::READ_CSV);   
 $i = 1;
 $lfg = true;

 foreach($file as $line){
    if($line[0]===null) continue;
    $divDate = explode("-",$line[1]);

 if(preg_match("/^[0-9]{4}$/",trim($line[0]))===0||

 checkdate($divDate[1],$divDate[2],$divDate[0])===false||
    preg_match("/^[0-9]$/",$line[2])===0) {
        echo $i."行目にイラーがあります。";
        $flg = false;
    }
    $i++;
}
if($flg===true){
    echo "正常終了しました";
}