<?php
//Database.class.php
//  アクセスURL：http://localhost/DT/board/database.class.php
namespace board;

class Database
{
    private $db_con = null;//DB接続オブジェクト
    private $db_host = '';
    private $db_user = '';
    private $db_pass = '';
    private $db_name = '';
    //host,user,pass,nameは接続するために必要な情報
    //construct : アンダースコアは２つ
    public function __construct($db_host, $db_user, $db_pass, $db_name)//runs when new db is created
    {
        $this ->db_con = $this->connectDB($db_host, $db_user, $db_pass, $db_name);//connect to db and store connection in db_con
        //store connection info in class variables
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
    }

    private function connectDB($db_host, $db_user, $db_pass, $db_name)
    {
        $tmp_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);//mysqli connection function
        if ($tmp_con != false) {
            return $tmp_con;//接続オブジェクトを戻って来る来る
        } else {
            printf("Connect failed: %s¥n", mysqli_connect_error());
            exit();//イラーが発生して処理が止まる and exit
        }
    }

    public function execute($sql)//SQL文を実行するメソッド(like insert,update,delete)
    {
        return mysqli_query($this->db_con, $sql);//SQL文を実行して結果を戻す
    }

    public function select($sql)//SQL文を実行して結果を配列で戻すメソッド(like select)
    {
        $res = $this->execute($sql);
        $data = [];
        while ($row = mysqli_fetch_array($res)) {
            array_push($data, $row);
        }
        //mysqli_free_result($res);
        return $data;//結果を配列で戻す
    }

    public function quote($int)//to prevent SQL injection like number
    {
        return mysqli_real_escape_string($this->db_con, $int);
    }

    public function str_quote($str)//to prevent SQL injection like string
    {
        return " '" . mysqli_real_escape_string($this->db_con, $str) . "' ";
    }

    public function getLastId()
    {
        return mysqli_insert_id($this->db_con);//直近に挿入された行のIDを取得する
    }

    public function close()//DB接続を閉じるメソッド 
    {
        mysqli_close($this->db_con);
    }
}
