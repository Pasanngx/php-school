<? php
/*
*ファイルパス(Win):C:¥xampp¥htdocd¥DT¥board¥while_foreach_for.php
*ファイル名:while_foreach_for.php
*アクセスURL(win):http://localhost/DT/board/while_foreach_for.php
*/
<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>PHPスクール1日目~while_foreach_for</title>
</head>
<body>
<?php
echo '[while/for]','<br>';

$i = 1;
while($i <=10) {
    echo $i;
    $i++;
}
echo'<br><br>';

for ($i = 1; $i <= 10; $i++) {
    echo $i . '<br>';
}
echo '<br>';

$arr = [ 'Saito', 'Tomohiko', 'Chiba', 'PHP' ];
$num = count($arr);
for ($i = 0; $i < $num; $i++) {
    echo $arr[$i] . '<br>';
}
echo '<br><br>';

echo '【foreach】', '<br>';
foreach ($arr as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}
echo '<br><br>';

$label_arr = [
    'family_name' => 'Saito',
    'first_name' => 'Tomohiko',
    'pref' => 'Chiba',
    'language' => 'PHP'
];
foreach ($label_arr as $label => $data) {
    echo $label . ' : ' . $data . '<br>';
}
echo '<br>';

$excel_arr = [
    [
      'family_name' => 'Saito',
      'first_name' => 'Tomohiko',
      'pref' => 'Chiba',
      'age' => '33',
      'language' => 'PHP'
    ],
    [
      'family_name' => 'Tanaka',
      'first_name' => 'Yohei',
      'pref' => 'Tokyo',
      'age' => '19',
      'language' => 'C'
    ],
    [
      'family_name' => 'Sato',
      'first_name' => 'Ichiro',
      'pref' => 'Kanagawa',
      'age' => '28',
      'language' => 'Java'
    ]
];

foreach ($excel_arr as $index => $member_data) {
    echo 'No:' . $index . '<br>';
    echo 'family_name : ' . $member_data['family_name'] . '<br>';
    echo 'first_name : ' . $member_data['first_name'] . '<br>';
    echo 'pref : ' . $member_data['pref'] . '<br>';
    echo 'age : ' . $member_data['age'] . '<br>';
    echo 'language : ' . $member_data['language'] . '<br>';
    echo '<br><br>';
}

foreach ($excel_arr as $member_data) {
    if ($member_data['age'] >= 30) {
        echo $member_data['family_name'] . 'さんは30代です。<br>';
    } elseif ($member_data['age'] >= 20) {
        echo $member_data['family_name'] . 'さんは20代です。<br>';
    } else {
        echo $member_data['family_name'] . 'さんは10代です。<br>';
    }
}
echo '<br><br>';

echo '<table border="1px">';
echo '<tr>';
echo '<td>family_name</td>';
echo '<td>first_name</td>';
echo '<td>pref</td>';
echo '<td>age</td>';
echo '<td>language</td>';
echo '</tr>';
foreach ($excel_arr as $member) {
    echo '<tr>';
    echo '<td>' . $member['family_name'] . '</td>';
    echo '<td>' . $member['first_name'] . '</td>';
    echo '<td>' . $member['pref'] . '</td>';
    echo '<td>' . $member['age'] . '</td>';
    echo '<td>' . $member['language'] . '</td>';
    echo '</tr>';
}
echo '</table>';
echo '<br><br>';

$j = 1;
$flg = true;
while ($flg === true) {
    if ($j === 10) $flg = false;
    echo $j;
    $j++;
}
echo '<br><br>';

?>
</body>
</html>
//pratice-1　１回目
// echo '[while/for]','<br>';

// $i = 1;
// while($i <=10) {
//     echo $i;
//     $i++;
// }
// echo'<br><br>';

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . '<br>';
// }
// echo '<br>';

// $arr = [ 'Saito', 'Tomohiko', 'Chiba', 'PHP' ];
// $num = count($arr);
// for ($i = 0; $i < $num; $i++) {
//     echo $arr[$i] . '<br>';
// }
// echo '<br><br>';

// echo '【foreach】', '<br>';
// foreach ($arr as $key => $value) {
//     echo $key . ' ' . $value . '<br>';
// }
// echo '<br><br>';

// $label_arr = [
//     'family_name' => 'Saito',
//     'first_name' => 'Tomohiko',
//     'pref' => 'Chiba',
//     'language' => 'PHP'
// ];
// foreach ($label_arr as $label => $data) {
//     echo $label . ' : ' . $data . '<br>';
// }
// echo '<br>';

// $excel_arr = [
//     [
//       'family_name' => 'Saito',
//       'first_name' => 'Tomohiko',
//       'pref' => 'Chiba',
//       'age' => '33',
//       'language' => 'PHP'
//     ],
//     [
//       'family_name' => 'Tanaka',
//       'first_name' => 'Yohei',
//       'pref' => 'Tokyo',
//       'age' => '19',
//       'language' => 'C'
//     ],
//     [
//       'family_name' => 'Sato',
//       'first_name' => 'Ichiro',
//       'pref' => 'Kanagawa',
//       'age' => '28',
//       'language' => 'Java'
//     ]
// ];

// foreach ($excel_arr as $index => $member_data) {
//     echo 'No:' . $index . '<br>';
//     echo 'family_name : ' . $member_data['family_name'] . '<br>';
//     echo 'first_name : ' . $member_data['first_name'] . '<br>';
//     echo 'pref : ' . $member_data['pref'] . '<br>';
//     echo 'age : ' . $member_data['age'] . '<br>';
//     echo 'language : ' . $member_data['language'] . '<br>';
//     echo '<br><br>';
// }

// foreach ($excel_arr as $member_data) {
//     if ($member_data['age'] >= 30) {
//         echo $member_data['family_name'] . 'さんは30代です。<br>';
//     } elseif ($member_data['age'] >= 20) {
//         echo $member_data['family_name'] . 'さんは20代です。<br>';
//     } else {
//         echo $member_data['family_name'] . 'さんは10代です。<br>';
//     }
// }
// echo '<br><br>';

// echo '<table border="1px">';
// echo '<tr>';
// echo '<td>family_name</td>';
// echo '<td>first_name</td>';
// echo '<td>pref</td>';
// echo '<td>age</td>';
// echo '<td>language</td>';
// echo '</tr>';
// foreach ($excel_arr as $member) {
//     echo '<tr>';
//     echo '<td>' . $member['family_name'] . '</td>';
//     echo '<td>' . $member['first_name'] . '</td>';
//     echo '<td>' . $member['pref'] . '</td>';
//     echo '<td>' . $member['age'] . '</td>';
//     echo '<td>' . $member['language'] . '</td>';
//     echo '</tr>';
// }
// echo '</table>';
// echo '<br><br>';

// $j = 1;
// $flg = true;
// while ($flg === true) {
//     if ($j === 10) $flg = false;
//     echo $j;
//     $j++;
// }
// echo '<br><br>';

//pratice-2　練習２回目２回目
// echo '[while/for]','<br>';

// $i = 1;
// while($i <=10) {
//     echo $i;
//     $i++;
// }
// echo'<br><br>';

// for ($i = 1; $i <= 10; $i++) {
//     echo $i . '<br>';
// }
// echo '<br>';

// $arr = [ 'Saito', 'Tomohiko', 'Chiba', 'PHP' ];
// $num = count($arr);
// for ($i = 0; $i < $num; $i++) {
//     echo $arr[$i] . '<br>';
// }
// echo '<br><br>';

// echo '【foreach】', '<br>';
// foreach ($arr as $key => $value) {
//     echo $key . ' ' . $value . '<br>';
// }
// echo '<br><br>';

// $label_arr = [
//     'family_name' => 'Saito',
//     'first_name' => 'Tomohiko',
//     'pref' => 'Chiba',
//     'language' => 'PHP'
// ];
// foreach ($label_arr as $label => $data) {
//     echo $label . ' : ' . $data . '<br>';
// }
// echo '<br>';

// $excel_arr = [
//     [
//       'family_name' => 'Saito',
//       'first_name' => 'Tomohiko',
//       'pref' => 'Chiba',
//       'age' => '33',
//       'language' => 'PHP'
//     ],
//     [
//       'family_name' => 'Tanaka',
//       'first_name' => 'Yohei',
//       'pref' => 'Tokyo',
//       'age' => '19',
//       'language' => 'C'
//     ],
//     [
//       'family_name' => 'Sato',
//       'first_name' => 'Ichiro',
//       'pref' => 'Kanagawa',
//       'age' => '28',
//       'language' => 'Java'
//     ]
// ];

// foreach ($excel_arr as $index => $member_data) {
//     echo 'No:' . $index . '<br>';
//     echo 'family_name : ' . $member_data['family_name'] . '<br>';
//     echo 'first_name : ' . $member_data['first_name'] . '<br>';
//     echo 'pref : ' . $member_data['pref'] . '<br>';
//     echo 'age : ' . $member_data['age'] . '<br>';
//     echo 'language : ' . $member_data['language'] . '<br>';
//     echo '<br><br>';
// }

// foreach ($excel_arr as $member_data) {
//     if ($member_data['age'] >= 30) {
//         echo $member_data['family_name'] . 'さんは30代です。<br>';
//     } elseif ($member_data['age'] >= 20) {
//         echo $member_data['family_name'] . 'さんは20代です。<br>';
//     } else {
//         echo $member_data['family_name'] . 'さんは10代です。<br>';
//     }
// }
// echo '<br><br>';

// echo '<table border="1px">';
// echo '<tr>';
// echo '<td>family_name</td>';
// echo '<td>first_name</td>';
// echo '<td>pref</td>';
// echo '<td>age</td>';
// echo '<td>language</td>';
// echo '</tr>';
// foreach ($excel_arr as $member) {
//     echo '<tr>';
//     echo '<td>' . $member['family_name'] . '</td>';
//     echo '<td>' . $member['first_name'] . '</td>';
//     echo '<td>' . $member['pref'] . '</td>';
//     echo '<td>' . $member['age'] . '</td>';
//     echo '<td>' . $member['language'] . '</td>';
//     echo '</tr>';
// }
// echo '</table>';
// echo '<br><br>';

// $j = 1;
// $flg = true;
// while ($flg === true) {
//     if ($j === 10) $flg = false;
//     echo $j;
//     $j++;
// }
// echo '<br><br>';