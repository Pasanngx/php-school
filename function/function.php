<?php
// * アクセスURL(Win)：http://localhost/DT/function/function.php

define('TAX', 1.1);

function say_hello($name)
{
  echo 'Hi, ' . $name . '. <br>';
  echo 'Your name is ' . $name . '.';
  echo '<br><br>';
}

function say_hello2($name = 'hoge')
{
  echo 'Hi, ' . $name . '. <br>';
  echo 'Your name is ' . $name . '.';
  echo ' <br><br>';
}

function say_hello3($name, $age)
{
  echo $name . ' is ' . $age . ' years old.';
  echo '<br><br>';
}

say_hello('Matsumoto');
say_hello('Tanaka');
say_hello('Watanabe');
say_hello('Kato');

say_hello2();
say_hello2('Suzuki');

say_hello3('Matsumoto', 34);

$price = 1000;
echo $price . '<br>';

$price2 = calc($price);
echo $price2 . '<br>';
echo $price . '<br>';

function calc($num)
{
  $price = 1.2 * $num;
  $price2 = $price * TAX;
  return $price2;
}

function say_weather($name, $fine_flg)
{
  if ($fine_flg === true) {
    echo $name . 'さん、いい天気ですね';
  } else {
    echo $name . 'さん、今日は雨ですね';
  }
}

say_weather('鹿児島', false);

//pratice 練習１回目
// <?php
// define('TAX', 1.1);

// function say_hello($name)
// {
//   echo 'Hi, ' . $name . '. <br>';
//   echo 'Your name is ' . $name . '.';
//   echo '<br><br>';
// }

// function say_hello2($name = 'hoge')
// {
//   echo 'Hi, ' . $name . '. <br>';
//   echo 'Your name is ' . $name . '.';
//   echo ' <br><br>';
// }

// function say_hello3($name, $age)
// {
//   echo $name . ' is ' . $age . ' years old.';
//   echo '<br><br>';
// }

// say_hello('Matsumoto');
// say_hello('Tanaka');
// say_hello('Watanabe');
// say_hello('Kato');

// say_hello2();
// say_hello2('Suzuki');

// say_hello3('Matsumoto', 34);

// $price = 1000;
// echo $price . '<br>';

// $price2 = calc($price);
// echo $price2 . '<br>';
// echo $price . '<br>';

// function calc($num)
// {
//   $price = 1.2 * $num;
//   $price2 = $price * TAX;
//   return $price2;
// }

// function say_weather($name, $fine_flg)
// {
//   if ($fine_flg === true) {
//     echo $name . 'さん、いい天気ですね';
//   } else {
//     echo $name . 'さん、今日は雨ですね';
//   }
// }

// say_weather('鹿児島', false);

// //pratice 2練習２回目
// // <?php
// // define('TAX', 1.1);

// // function say_hello($name)
// // {
// //   echo 'Hi, ' . $name . '. <br>';
// //   echo 'Your name is ' . $name . '.';
// //   echo '<br><br>';
// // }

// function say_hello2($name = 'hoge')
// {
//   echo 'Hi, ' . $name . '. <br>';
//   echo 'Your name is ' . $name . '.';
//   echo ' <br><br>';
// }

// function say_hello3($name, $age)
// {
//   echo $name . ' is ' . $age . ' years old.';
//   echo '<br><br>';
// }

// say_hello('Matsumoto');
// say_hello('Tanaka');
// say_hello('Watanabe');
// say_hello('Kato');

// say_hello2();
// say_hello2('Suzuki');

// say_hello3('Matsumoto', 34);

// $price = 1000;
// echo $price . '<br>';

// $price2 = calc($price);
// echo $price2 . '<br>';
// echo $price . '<br>';

// function calc($num)
// {
//   $price = 1.2 * $num;
//   $price2 = $price * TAX;
//   return $price2;
// }

// function say_weather($name, $fine_flg)
// {
//   if ($fine_flg === true) {
//     echo $name . 'さん、いい天気ですね';
//   } else {
//     echo $name . 'さん、今日は雨ですね';
//   }
// }

// say_weather('鹿児島', false);
