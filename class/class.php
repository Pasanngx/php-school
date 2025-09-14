<?php

/*
 * ファイルパス C:\xampp\htdocs\Class\class.php
 * ファイル名 class.php
 * アクセスURL http://localhost/DT/class/class.php
 *
 * *学習内容 オブジェクト(データの型)
 * メリット
 * + 複雑なデータも関数を一身で扱うため、ソースコードが非常に読みやすくなる。
 * + 表示するデータと、クラス内からしかみえないので適正な部署。
 * + 今や、変数、関数の関係
 */

/*
オブジェクトとは、関連する複数の変数と関数を一個の部品のように数えるもの
の
クラスはその設計図
の 関数
の 一部処理
*/

// 製品生成 品物の名前はsaiTo
// dreamTheaterという設計書（クラス）をもとに
// saiToという製品（インスタンス）を作る
// $saito = new dreamTheater("tomohiko");
// var_dump($saito);
// echo $name
// echo $saiTo->name
// saiToなのでエラー
// echo $saiTo->name ('br');

// これだとコンピューターが迷う
// setAge('32');

// $saito->setAge('32');
// $saito->setLanguage('PHP');

// var_dump($saito);

// $saito->showTable();

dreamTheater::countUp(); //1
// $saito->countUp(); //2

$tanakaData = [];
$tanakaData['name'] = 'tanaka';
$tanakaData['age'] = 26;
$tanakaData['language'] = 'java';

echo '<br><br>';

$tanaka = new dreamTheater2($tanakaData);


// これを実行するとエラー class.php
// echo $tanaka->name;

$tanaka = [];
$tanaka['age'] = '';
$tanaka['language'] = '';
// $tanaka['this']はオブジェクトの中の
// $name、つまり$nameしかはいってきまへんね
// $this->name = $name

$personData = [
'name' => 'katou ichirou',
'age' => 50,
'language' => 'br'
];

$saito = new dreamTheater3($personData);
$saito->viewMessage();

$sherpa = new dreamTheater('sherpa' ,24);
var_dump($sherpa);
$sherpa->setLanguage('C#');
$kumori = new dreamTheater('kumori',32);
var_dump($kumori);
//クラス内で記述した変数はプロパティ、関数はメソッドと呼ぶ
class dreamTheater
{
    // 変数の設定
    private $name = '';

    private $age = '';

    private $language = '';

    private static $count = 0;

    /*
     * この関数だけは必要
     *  (newが呼ばれると自動的に呼び出される)
     *  コンストラクタ
     * /書き方は (アンダースコア２つ)
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age= $age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        echo $this->name . ' is ' . $this->age . ' years old <br>';
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        echo $this->name . ' uses ' . $this->language . ' <br>';
    }

    public function showTable()
    {
        echo '<table border="1">';
        echo '<caption>' . $this->name . '\'s profile</caption>';
        echo '<tr><th>name</th><th>age</th><th>language</th></tr>';
        echo '<tr>';
        echo '<td>' . $this->name . '</td>';
        echo '<td>' . $this->age . '</td>';
        echo '<td>' . $this->language . '</td>';
        echo '</tr>';
        echo '</table>';
    }
    public static function countUp()
    {
        self::$count++;
        echo self::$count . '<br>';
    }

}

class dreamTheater2
{
    // 変数の設定
    protected $name = '';

    protected $age = '';

    protected $language = '';

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->age = $data['age'];
        $this->language = $data['language'];
    }

    public function getAge()
    {
        echo $this->name . ' is ' . $this->age . ' years old <br>';
    }

    public function getLanguage()
    {
        echo $this->name . ' uses ' . $this->language . '<br>';
    }

    public function showTable()
    {
        echo '<table border="1">';
        echo '<caption>' . $this->name . '\'s profile</caption>';
        echo '<tr><th>name</th><th>age</th><th>language</th></tr>';
        echo '<tr>';
        echo '<td>' . $this->name . '</td>';
        echo '<td>' . $this->age . '</td>';
        echo '<td>' . $this->language . '</td>';
        echo '</tr>';
        echo '</table>';
    }
}

// 継承
class dreamTheater3 extends dreamTheater2
{
    public function __construct($data)
    {
        parent::__construct($data);//
    }

    public function viewMessage($flag = true)
    {
        if ($flag == true) {
            // 親のクラスを呼べる
            $this->showTable();
        } else {
            echo $this->name . '<br>';
            echo $this->age . '<br>';
            echo $this->language . '<br>';
        }
    }
}