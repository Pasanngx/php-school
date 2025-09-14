<!-- アクセスURL(Win)：http://localhost/DT/contact/if.php -->
<?php
echo '【表示してみよう】', '<br>';
echo '齊藤 友彦';
echo '<br>';
echo 'サイトウ トモヒコ';
echo '<br><br>';

echo '【変数】', '<br>';
$x = '10';
$name = '齊藤 友彦';
echo $x, '<br>';
echo $name;
echo '<br><br>';

echo '【定数】', '<br>';
const CONST_NAME = '齊藤 友彦（定数）';
echo CONST_NAME;
echo '<br><br>';

echo '【比較演算子/if文】', '<br>';
$id = 0;
if ($id === '') {
  echo 'empty';
} else {
  echo 'not empty ';
}
echo '<br>';

$x = '10';
if ($x === 10) {
  echo '10';
} else {
  echo 'not 10';
}
echo '<br><br>';

$my_score = 70;
if ($my_score >= 80) {
  echo 'がんばりましたね';
} elseif ($my_score >= 60) {
  echo 'もう一歩です';
} elseif ($my_score >= 40) {
  echo '頑張りましょう';
} else {
  echo 'ダメダメです';
}
echo '<br><br>';

echo '【論理演算子】', '<br>';
$a = 10;
$c = 7;
if ($a === 10 && $c === 8) {
  echo 'OK';
} else {
  echo 'NG';
}
echo '<br><br>';

echo '【その他の比較】', '<br>';
$a = '0';
if (empty($a) === true) {
  echo '空(カラ)です';
}
echo '<br><br>';

if ($a !== '') {
  echo '値が入っています。';
} else {
  echo '空白です';
}
?>

<!-- <!-- Pratice 練習１回目
<!-- <?php
// echo '【表示してみよう】', '<br>';
// echo '齊藤 友彦';
// echo '<br>';
// echo 'サイトウ トモヒコ';
// echo '<br><br>';

// echo '【変数】', '<br>';
// $x = '10';
// $name = '齊藤 友彦';
// echo $x, '<br>';
// echo $name;
// echo '<br><br>';

// echo '【定数】', '<br>';
// const CONST_NAME = '齊藤 友彦（定数）';
// echo CONST_NAME;
// echo '<br><br>';

// echo '【比較演算子/if文】', '<br>';
// $id = 0;
// if ($id === '') {
//   echo 'empty';
// } else {
//   echo 'not empty ';
// }
// echo '<br>';

// $x = '10';
// if ($x === 10) {
//   echo '10';
// } else {
//   echo 'not 10';
// }
// echo '<br><br>';

// $my_score = 70;
// if ($my_score >= 80) {
//   echo 'がんばりましたね';
// } elseif ($my_score >= 60) {
//   echo 'もう一歩です';
// } elseif ($my_score >= 40) {
//   echo '頑張りましょう';
// } else {
//   echo 'ダメダメです';
// }
// echo '<br><br>';

// echo '【論理演算子】', '<br>';
// $a = 10;
// $c = 7;
// if ($a === 10 && $c === 8) {
//   echo 'OK';
// } else {
//   echo 'NG';
// }
// echo '<br><br>';

// echo '【その他の比較】', '<br>';
// $a = '0';
// if (empty($a) === true) {
//   echo '空(カラ)です';
// }
// echo '<br><br>';

// if ($a !== '') {
//   echo '値が入っています。';
// } else {
//   echo '空白です';
// }
// ?> -->
<!-- //pratice 練習２回目  -->
<!--
// echo '【表示してみよう】', '<br>';
// echo '齊藤 友彦';
//  echo '<br>'; 
// echo 'サイトウ トモヒコ';
// echo '<br><br>';

// echo '【変数】', '<br>';
// $x = '10';
// $name = '齊藤 友彦';
// echo $x, '<br>';
// echo $name;
// echo '<br><br>';

// echo '【定数】', '<br>';
// const CONST_NAME = '齊藤 友彦（定数）';
// echo CONST_NAME;
// echo '<br><br>';

// echo '【比較演算子/if文】', '<br>';
// $id = 0;
// if ($id === '') {
//   echo 'empty';
// } else {
//   echo 'not empty ';
// }
// echo '<br>';

// $x = '10';
// if ($x === 10) {
//   echo '10';
// } else {
//   echo 'not 10';
// }
// echo '<br><br>';

// $my_score = 70;
// if ($my_score >= 80) {
//   echo 'がんばりましたね';
// } elseif ($my_score >= 60) {
//   echo 'もう一歩です';
// } elseif ($my_score >= 40) {
//   echo '頑張りましょう';
// } else {
//   echo 'ダメダメです';
// }
// echo '<br><br>';

// echo '【論理演算子】', '<br>';
// $a = 10;
// $c = 7;
// if ($a === 10 && $c === 8) {
//   echo 'OK';
// } else {
//   echo 'NG';
// }
// echo '<br><br>';

// echo '【その他の比較】', '<br>';
// $a = '0';
// if (empty($a) === true) {
//   echo '空(カラ)です';
// }
// echo '<br><br>';

// if ($a !== '') {
//   echo '値が入っています。';
// } else {
//   echo '空白です';
// } 
// ?> 
