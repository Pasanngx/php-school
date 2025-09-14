<!-- * アクセスURL：http://localhost/DT/board/arr.php -->
<?php
$var = 1;
$var2 = '1';
$name = '齊藤';

var_dump($var);
echo '<br>';
var_dump($var2);
echo '<br>';
var_dump($name);
echo '<br><br>';

echo '【配列】', '<br>';
$arr = [
  'Saito',
  'Tomohiko',
  'Chiba',
  'PHP'
];

var_dump($arr);
echo '<br><br>';

echo $arr[0];
echo '<br>';
echo $arr[1];
echo '<br><br>';

$arr[4] = 'man';
var_dump($arr);
echo '<br><br>';

$arr[4] = 'Tokyo';
var_dump($arr);
echo '<br><br><br>';

echo '【連想配列】', '<br>';
$label_arr = [
  'family_name' => 'Saito',
  'first_name' => 'Tomohiko',
  'pref' => 'Chiba',
  'language' => 'PHP'
];

var_dump($label_arr);
echo '<br><br>';

echo $label_arr['language'];
echo '<br><br>';

$label_arr['hobby'] = 'baseball';
var_dump($label_arr);
echo '<br><br>';

$label_arr['language'] = 'Nepali';
var_dump($label_arr);
echo '<br><br><br>';

echo '【多次元配列】', '<br>';
$excel_arr = [
  [
    'family_name' => 'Saito',
    'first_name' => 'Tomohiko',
    'pref' => 'Chiba',
    'language' => 'PHP'
  ],
  [
    'family_name' => 'Tanaka',
    'first_name' => 'Yohei',
    'pref' => 'Tokyo',
    'language' => 'C'
  ],
  [
    'family_name' => 'Sato',
    'first_name' => 'Ichiro',
    'pref' => 'Kanagawa',
    'language' => 'Java'
  ]
];

var_dump($excel_arr);
echo '<br><br>';

var_dump($excel_arr[2]);
echo '<br><br>';

echo $excel_arr[0]['language'];
echo '<br><br>';

echo $excel_arr[1]['pref'];
echo '<br>';

$excel_arr[1]['pref'] = 'Osaka';
echo $excel_arr[1]['pref'];
echo '<br><br>';

$excel_arr[3] = [
  'family_name' => 'Suzuki',
  'first_name' => 'Jiro',
  'pref' => 'Saitama',
  'language' => 'Perl'
];
var_dump($excel_arr);
echo '<br><br>';

$label_arr = [
  'family_name' => 'Yamada',
  'first_name' => 'Saburo',
  'pref' => 'Tochigi',
  'language' => 'Python'
];
array_push($excel_arr, $label_arr);
var_dump($excel_arr);
echo '<br><br>';

$arr = [
  'Saito',
  'Tomohiko',
  'Chiba',
  'PHP'
];
[$familyName, $firstName, $pref, $language] = $arr;

echo $familyName, '<br>';
echo $firstName, '<br>';
echo $pref, '<br>';
echo $language, '<br>';

//pratice 練習１回目
// <?php
// $var = 1;
// $var2 = '1';
// $name = '齊藤';

// var_dump($var);
// echo '<br>';
// var_dump($var2);
// echo '<br>';
// var_dump($name);
// echo '<br><br>';

// echo '【配列】', '<br>';
// $arr = [
//   'Saito',
//   'Tomohiko',
//   'Chiba',
//   'PHP'
// ];

// var_dump($arr);
// echo '<br><br>';

// echo $arr[0];
// echo '<br>';
// echo $arr[1];
// echo '<br><br>';

// $arr[4] = 'man';
// var_dump($arr);
// echo '<br><br>';

// $arr[4] = 'Tokyo';
// var_dump($arr);
// echo '<br><br><br>';

// echo '【連想配列】', '<br>';
// $label_arr = [
//   'family_name' => 'Saito',
//   'first_name' => 'Tomohiko',
//   'pref' => 'Chiba',
//   'language' => 'PHP'
// ];

// var_dump($label_arr);
// echo '<br><br>';

// echo $label_arr['language'];
// echo '<br><br>';

// $label_arr['hobby'] = 'baseball';
// var_dump($label_arr);
// echo '<br><br>';

// $label_arr['language'] = 'Nepali';
// var_dump($label_arr);
// echo '<br><br><br>';

// echo '【多次元配列】', '<br>';
// $excel_arr = [
//   [
//     'family_name' => 'Saito',
//     'first_name' => 'Tomohiko',
//     'pref' => 'Chiba',
//     'language' => 'PHP'
//   ],
//   [
//     'family_name' => 'Tanaka',
//     'first_name' => 'Yohei',
//     'pref' => 'Tokyo',
//     'language' => 'C'
//   ],
//   [
//     'family_name' => 'Sato',
//     'first_name' => 'Ichiro',
//     'pref' => 'Kanagawa',
//     'language' => 'Java'
//   ]
// ];

// var_dump($excel_arr);
// echo '<br><br>';

// var_dump($excel_arr[2]);
// echo '<br><br>';

// echo $excel_arr[0]['language'];
// echo '<br><br>';

// echo $excel_arr[1]['pref'];
// echo '<br>';

// $excel_arr[1]['pref'] = 'Osaka';
// echo $excel_arr[1]['pref'];
// echo '<br><br>';

// $excel_arr[3] = [
//   'family_name' => 'Suzuki',
//   'first_name' => 'Jiro',
//   'pref' => 'Saitama',
//   'language' => 'Perl'
// ];
// var_dump($excel_arr);
// echo '<br><br>';

// $label_arr = [
//   'family_name' => 'Yamada',
//   'first_name' => 'Saburo',
//   'pref' => 'Tochigi',
//   'language' => 'Python'
// ];
// array_push($excel_arr, $label_arr);
// var_dump($excel_arr);
// echo '<br><br>';

// $arr = [
//   'Saito',
//   'Tomohiko',
//   'Chiba',
//   'PHP'
// ];
// [$familyName, $firstName, $pref, $language] = $arr;

// echo $familyName, '<br>';
// echo $firstName, '<br>';
// echo $pref, '<br>';
// echo $language, '<br>';

//pratice 練習２回目
// <?php
// $var = 1;
// $var2 = '1';
// $name = '齊藤';

// var_dump($var);
// echo '<br>';
// var_dump($var2);
// echo '<br>';
// var_dump($name);
// echo '<br><br>';

// echo '【配列】', '<br>';
// $arr = [
//   'Saito',
//   'Tomohiko',
//   'Chiba',
//   'PHP'
// ];

// var_dump($arr);
// echo '<br><br>';

// echo $arr[0];
// echo '<br>';
// echo $arr[1];
// echo '<br><br>';

// $arr[4] = 'man';
// var_dump($arr);
// echo '<br><br>';

// $arr[4] = 'Tokyo';
// var_dump($arr);
// echo '<br><br><br>';

// echo '【連想配列】', '<br>';
// $label_arr = [
//   'family_name' => 'Saito',
//   'first_name' => 'Tomohiko',
//   'pref' => 'Chiba',
//   'language' => 'PHP'
// ];

// var_dump($label_arr);
// echo '<br><br>';

// echo $label_arr['language'];
// echo '<br><br>';

// $label_arr['hobby'] = 'baseball';
// var_dump($label_arr);
// echo '<br><br>';

// $label_arr['language'] = 'Nepali';
// var_dump($label_arr);
// echo '<br><br><br>';

// echo '【多次元配列】', '<br>';
// $excel_arr = [
//   [
//     'family_name' => 'Saito',
//     'first_name' => 'Tomohiko',
//     'pref' => 'Chiba',
//     'language' => 'PHP'
//   ],
//   [
//     'family_name' => 'Tanaka',
//     'first_name' => 'Yohei',
//     'pref' => 'Tokyo',
//     'language' => 'C'
//   ],
//   [
//     'family_name' => 'Sato',
//     'first_name' => 'Ichiro',
//     'pref' => 'Kanagawa',
//     'language' => 'Java'
//   ]
// ];

// var_dump($excel_arr);
// echo '<br><br>';

// var_dump($excel_arr[2]);
// echo '<br><br>';

// echo $excel_arr[0]['language'];
// echo '<br><br>';

// echo $excel_arr[1]['pref'];
// echo '<br>';

// $excel_arr[1]['pref'] = 'Osaka';
// echo $excel_arr[1]['pref'];
// echo '<br><br>';

// $excel_arr[3] = [
//   'family_name' => 'Suzuki',
//   'first_name' => 'Jiro',
//   'pref' => 'Saitama',
//   'language' => 'Perl'
// ];
// var_dump($excel_arr);
// echo '<br><br>';

// $label_arr = [
//   'family_name' => 'Yamada',
//   'first_name' => 'Saburo',
//   'pref' => 'Tochigi',
//   'language' => 'Python'
// ];
// array_push($excel_arr, $label_arr);
// var_dump($excel_arr);
// echo '<br><br>';

// $arr = [
//   'Saito',
//   'Tomohiko',
//   'Chiba',
//   'PHP'
// ];
// [$familyName, $firstName, $pref, $language] = $arr;

// echo $familyName, '<br>';
// echo $firstName, '<br>';
// echo $pref, '<br>';
// echo $language, '<br>';
