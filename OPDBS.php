<?php
class OPDBS{
    protected $conn = false;  //数据库连接资源
    protected $sql;           //sql语句

    /**
     * construct : be responsible for connect mysql
     */
    public function __construct(){
        $host = 'localhost';
        $user = 'root';
        $password =  '';
        $dbname = 'opdbs';
        $port =  '3306';

        $this->conn = mysqli_connect("$host:$port",$user,$password,$dbname) or die('mysql handle err');
    // var_dump($this->conn);die;
    }


    /**
     * query sql
     * @access public
     * @param $sql string sql str
     * @return $result
     */
    public function query($sql){
        $this->sql = $sql;
        return mysqli_query($this->conn, $this->sql);
    }
    /**
     * 获取所有的记录
     * @access public
     * @param $sql 执行的sql语句
     * @return $list 有所有记录组成的二维数组
     */
    public function getAll($sql){
        $result = $this->query($sql);
        $list = array();
        while ($row = mysqli_fetch_assoc($result)){
            $list[] = $row;
        }
        return $list;
    }

    public function close() {
        $this->conn->close();
    }
}