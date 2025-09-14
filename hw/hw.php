
<!-- //  * アクセスURL：http://localhost/DT/hw/hw.php -->
<?php
$arr = array('name'=>'松本','pref'=>'千葉','sex'=>'男');
echo "1.name=" . $arr["name"] . "<br>";
echo "pref=" . $arr["pref"] . "<br>";
echo "sex=" . $arr["sex"] . "<br>";
echo"2 .".
$arr['language']='php'; "br";
print_r($arr);
"br";
$students = array(
    array("name"=>"田中", "age"=>22, "pref"=>"千葉", "sex"=>"男", "language"=>"C"),
    array("name"=>"佐藤", "age"=>19, "pref"=>"東京", "sex"=>"男", "language"=>"Java"),
    array("name"=>"鈴木", "age"=>19, "pref"=>"東京", "sex"=>"女", "language"=>"C++"),
    array("name"=>"吉田", "age"=>27, "pref"=>"大阪", "sex"=>"女", "language"=>"Perl")
);
"<br>";
echo"(3.4)"."br";
$students[4]=array("name"=>"渡辺","age"=>"26","pref"=>"大阪","sex"=>"男","language"=>"C++");
var_dump($students);
"br";
echo "<table border='1'>";
echo "<tr><td>Name</td><td>Age</td><td>Pref</td><td>Sex</td><td>Language</td></tr>";

foreach ($students as $st) {
    echo "<tr>";
    echo "<td>".$st["name"]."</td>";
    echo "<td>".$st["age"]."</td>";
    echo "<td>".$st["pref"]."</td>";
    echo "<td>".$st["sex"]."</td>";
    echo "<td>".$st["language"]."</td>";
    echo "</tr>";
}

$products = array(
    array("code"=>"A0001", "product"=>"白菜", "price"=>298),
    array("code"=>"A0002", "product"=>"いわし", "price"=>248),
    array("code"=>"A0003", "product"=>"九条葱", "price"=>198),
    array("code"=>"A0004", "product"=>"サツマイモ", "price"=>498),
    array("code"=>"A0005", "product"=>"きびなごきびなご", "price"=>180)
);
echo"<table border='2.5'>";
echo "<tr><th>code</th><th>product</th><th>price</th></tr>";

foreach($products as $pro) {
    echo "<tr>";
    echo "<td>".$pro["code"]."</td>";
    echo "<td>".$pro["product"]."</td>";
    echo "<td>".$pro["price"]."</td>";
    echo "</tr>";
    $total += $pro["price"];
    $count++;
}


//     //totalprice and list
    echo "<p>合計金額: ".$total." 円</p>";
    echo "<p>商品点数: ".$count." 点</p>";
    echo"<br>";

    
    $dataArr = array(
    array("name"=>"山田", "age"=>19, "sex"=>"1"),
    array("name"=>"鈴木", "age"=>22, "sex"=>"0"),
    array("name"=>"田中", "age"=>18, "sex"=>"1"),
    array("name"=>"渡辺", "age"=>25, "sex"=>"0"),
    array("name"=>"佐藤", "age"=>33, "sex"=>"1")
);

echo'門3.1';
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Age</th><th>Sex</th></tr>";
foreach ($dataArr as $person) {
    $sex = ($person["sex"] == "1") ? "男" : "女"; // 1=male, 0=female
    echo "<tr>";
    echo "<td>".$person["name"]."</td>";
    echo "<td>".$person["age"]."</td>";
    echo "<td>".$sex."</td>";
    echo "</tr>";
}
echo "</table><br>";
foreach($dataArr as $person){
if ($person["age"]<20){
    echo $person["name"]." さんは未成年なのでまだお酒は飲めません。<br>";
} else{
    echo $person["name"]. "サン、飲みすぎは注意しましょう！<br>";
}
}
echo "<br>";
echo "<h3>問3-3 男女別人数と平均年齢</h3>";
$maleCount = 0;
$maleAgeSum = 0;
$femaleCount = 0;
$femaleAgeSum = 0;

foreach ($dataArr as $person) {
    if ($person["sex"] == "1") { // Male
        $maleCount++;
        $maleAgeSum += $person["age"];
    } else { // Female
        $femaleCount++;
        $femaleAgeSum += $person["age"];
    }
}

// Calculate averages safely
$maleAvg = ($maleCount > 0) ? $maleAgeSum / $maleCount : 0;
$femaleAvg = ($femaleCount > 0) ? $femaleAgeSum / $femaleCount : 0;

echo "男性メンバー　".$maleCount."人 （平均年齢 ".round($maleAvg,1)."才）<br>";
echo "女性メンバー　".$femaleCount."人 （平均年齢 ".round($femaleAvg,1)."才）<br>";
?>
