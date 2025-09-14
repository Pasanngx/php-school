<?php
// アクセスURL:http://localhost/DT/class/simple_class.php
// 学習内容：さまざまなクラスの作成方法を学ぶ。
 
// 最もシンプルなクラス
class Character
{
}
 
// インスタンス化
$simple_character = new Character();
//PHPでは、コンストラクタが定義されていない場合、PHPは自動的にデフォルトのコンストラクタを提供します。このデフォルトのコンストラクタは、特に何も処理を行わず、オブジェクトのインスタンス化を行うだけです。
// var_dump($simple_character);
// object(Character)#1 (0){}
 
 
// 変数を持つクラス
class PropertyCharacter
{
  // プロパティの定義
  // アクセス修飾子 public　そのプロパティやメソッドがどこからでもアクセスできることを意味します。クラスの外からでもアクセス可能です。
  public $first_name;
  public $last_name;
}
 
// インスタンス化
$property_character_1 = new PropertyCharacter();
$property_character_1->first_name = "太郎";
$property_character_1->last_name = "PHP";
  // -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
 
$property_character_2 = new PropertyCharacter();
$property_character_2->first_name = "花子";
$property_character_2->last_name = "JavaScript";
 
echo "名前は、". $property_character_1->last_name.$property_character_1->first_name. "<br>";
echo "名前は、". $property_character_2->last_name.$property_character_2->first_name. "<br>";
 
// var_dump($property_character_1);
// object(PropertyCharacter)#2 (2) { ["first_name"]=> string(6) "太郎" ["last_name"]=> string(3) "PHP" }
 
 
// 関数を持つクラス
class MethodCharacter
{
  // プロパティの定義
  public $first_name;
  public $last_name;
 
  // メソッドの定義
  public function self_introduction()
  {
    echo "名前は、".$this->last_name. $this->first_name. " : MethodCharacterクラスから表示<br>";
    //$this は、「自分自身（今使っているインスタンス自身）」を指す特別な変数。クラスの中で、そのクラスのプロパティやメソッドにアクセスするときに使う。
    // -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
  }
}
 
// インスタンス化
$method_character_1 = new MethodCharacter();
$method_character_1->first_name = "太郎";
$method_character_1->last_name = "PHP";
// -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
 
$method_character_2 = new MethodCharacter();
$method_character_2->first_name = "花子";
$method_character_2->last_name = "JavaScript";
 
$method_character_1->self_introduction();
$method_character_2->self_introduction();
// -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
 
 
// コンストラクターを持つクラス
class ConstructCharacter
{
  // プロパティの定義
  public $first_name;
  public $last_name;
 
  // メソッドの定義
    // __constructメソッドは、インスタンスを生成する際に自動的に呼び出される特別なメソッドです。
  public function __construct($first_name, $last_name)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    //$this は、「自分自身（今使っているインスタンス自身）」を指す特別な変数。クラスの中で、そのクラスのプロパティやメソッドにアクセスするときに使う。
    // -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
  }
 
  public function self_introduction()
  {
    echo "名前は、".$this->last_name. $this->first_name. " : ConstructCharacterクラスから表示<br>";
    //$this は、「自分自身（今使っているインスタンス自身）」を指す特別な変数。クラスの中で、そのクラスのプロパティやメソッドにアクセスするときに使う。
    // -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
  }
}
 
// インスタンス化時に渡す引数は、クラスのコンストラクターの引数として使用される。
$construct_character_1 = new ConstructCharacter("太郎", "PHP");
$construct_character_2 = new ConstructCharacter("花子", "JavaScript");
$construct_character_1->self_introduction();
$construct_character_2->self_introduction();
//var_dump($construct_character_1);
//object(ConstructCharacter)#6 (2) { ["first_name"]=> string(6) "太郎" ["last_name"]=> string(3) "PHP" }
 
 
// 静的メソッド インスタンスを生成しなくても、クラスから直接呼び出せるメソッド
// 通常のメソッドは、インスタンス化したインスタンス(オブジェクト)から呼び出す。
class Exchanging
{
  public static function convertYenIntoDollars($yen)
  {
    $rate = 0.0091;
    return floatval($rate * $yen); //floatval関数は、変数のfloat値を取得する
  }
}
 
$money = 10000;
echo "You have ". Exchanging::convertYenIntoDollars($money). "dollars.<br>";
// インスタンスからでなくてもクラス名を使ってExchangingというクラスからconvertYenIntoDollarsメソッドを呼び出す。
// ダブルコロン ::（スコープ解決演算子）
// クラスのstaticな（インスタンスに依存しない）プロパティやメソッドにアクセスするための記号です。
 
 
class ExchangingWithStaticProperty
{
  //静的プロパティの定義
 public static $self_test = "self";
 public static $rate = 0.0091;
 
 // 静的メソッド
 public static function convertYenIntoDollars($yen)
  {
    self::$self_test = "test";
    return floatval(self::$rate * $yen);
  }
}
 
 
$money = 10000;
echo "1 : You have ". ExchangingWithStaticProperty::convertYenIntoDollars($money). "dollars.<br>";
 
ExchangingWithStaticProperty::$rate = 0.01;
echo "2 : You have ". ExchangingWithStaticProperty::convertYenIntoDollars($money). "dollars.<br>";
 
$exchanging_with_static_property = new ExchangingWithStaticProperty();
$exchanging_with_static_property::$rate = 0.1;
echo "3 : You have ". ExchangingWithStaticProperty::convertYenIntoDollars($money). "dollars.<br>";
 
 
// クラス定数
class ExchangingWithConstant
{
  // 定数の定義
  public const RATE = 0.0091;
  // 静的メソッド
  public static function convertYenIntoDollars($yen)
  {
    return floatval(self::RATE * $yen);
    //self::で定数にアクセスできる。
  }
}
$money = 10000;
echo "You have ". ExchangingWithConstant::convertYenIntoDollars($money). "dollars.<br>";
// RATEは、定数なのでアクセス修飾子がpublicでも変更できない。
 
 
class Dog
{
  // プロパティの定義
  private $name;
  // ・private　そのプロパティやメソッドがそのクラスの内部からのみアクセスできることを意味します。クラスの外からはアクセスできません。
 
  // メソッドの定義
  public function __construct($name)
  {
    $this->name = $name;
      // __constructメソッドは、インスタンスを生成する際に自動的に呼び出される特別なメソッドです。
      //$this は、「自分自身（今使っているインスタンス自身）」を指す特別な変数。クラスの中で、そのクラスのプロパティやメソッドにアクセスするときに使う。
      // -> は、オブジェクトのメソッドやプロパティにアクセスするための演算子です。これを使ってオブジェクトに対する操作を行います。
  }
   // ・private　そのプロパティやメソッドがそのクラスの内部からのみアクセスできることを意味します。クラスの外からはアクセスできません。
  private function getNameMessage()
  {
    return "ペットの名前は、". $this->name. "です。<br>";
  }
  // ・public　そのプロパティやメソッドがどこからでもアクセスできることを意味します。クラスの外からでもアクセス可能です。
  public function echoDogName()
  {
    $message = $this->getNameMessage();
    echo $message;
  }
}
 
$name = "ホネスキー";
$my_dog = new Dog($name);
$my_dog->echoDogName();
 
 
// クラスの継承とアクセス修飾子protected
// 継承元となるクラスを親クラス(スーパークラス)という。
// 親クラスを変更すれば、子クラスも変更されるため、変更の手間が省ける。
class NormalHuman
{
  // プロパティの定義
  protected $name = "";
    // ・protected　そのプロパティやメソッドがそのクラス自体とそのクラスを継承したサブクラスからアクセスできることを意味します。
 
  // メソッドの定義
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function walk()
  {
    echo $this->name."は歩きました。<br>";
  }
  // 継承元のこのクラスと、継承先のクラスの中で{}使用できる。
  protected function sneeze()
  {
    echo $this->name. "は「ハクション」とくしょみをしました。<br>";
  }
  public function greet()
  {
    echo $this->name. "は「こんにちは」と言いました。<br>";
  }
}
 
// nomal_humanクラスを継承した子クラスsuper_humanクラスを作成する。
class SuperHuman extends NormalHuman
{
  // メソッドの定義
  public function __construct($name)
  {
    parent::__construct($name);
  }
    // parent は「親クラス」を指す特別なキーワードです。
    // ダブルコロン ::（スコープ解決演算子）
    // クラスのstaticなプロパティやメソッド、または親クラスのメソッドを呼び出すときに使う記号。
    //つまり、親クラス（dreamtheater2）のコンストラクタをそのまま使うという意味。
 
    //メソッドの追加
    public function superWalk()
  {
    echo $this->name. "は”マッハ5”で歩きました。<br>";
    //親クラスのプロパティにアクセスしている。
  }
 
  public function supergreet($is_good_condition)
  {
    if($is_good_condition)
    {
      parent::greet(); //$this->greet();も使用できるが、parent::の方が親クラスのメソッドだと分かりやすい。
    } else{
      parent::sneeze(); //$this->sneeze();も使用できるが、parent::の方が親クラスのメソッドだと分かりやすい。
      //親クラスと同じメソッド名を作成した場合、、親クラスのオリジナルのメソッドを呼び出したい場合には parent:: を使います。
    }
  }
}
 
$nomal_human_name = "ボブさん";
$nomal_human = new NormalHuman($nomal_human_name);
$nomal_human->walk();
$nomal_human->greet();
 
$super_human_name = "パトリックさん";
$super_human = new SuperHuman($super_human_name);
$super_human->walk();
$super_human->superWalk();
$super_human->greet();
$is_good_condition = false;
$super_human->supergreet($is_good_condition);
 
 