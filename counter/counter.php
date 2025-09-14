<?php
/// *アクセスURL(win):http://localhost/DT/counter/counter.php
$err_msg1 = "";
if(is_file("count.txt")===false){
    file_put_contents("count.txt","0");
}
$num = intval(file_get_contents("count.txt"));
$num++;
file_put_contents("count.txt",($num));
$num ++;
file_put_contents("count.txt",($num));
echo "count:".$num;
?>