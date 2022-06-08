<?php
namespace Admin\Medicalstore;
abstract class Db{
    protected $conn;
    protected $table;

    public function connect(){
        $this->conn = mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);
    }
    public function getAll($feild ="*"):array{
        $sql = "SELECT $feild FROM $this->table";
        $res = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($res,MYSQLI_ASSOC); 
    }
    public function selectfromId($id,$feild="*"){
        $sql = "SELECT $feild FROM $this->table WHERE `id` = '$id'";
        $result = mysqli_query($this->conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $data[]= $row;
        }
        return (!empty($data))?$data:[];
    }
    public function selectWhere($cond,$feild ="*"){
        $sql = "SELECT $feild FROM $this->table WHERE $cond";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);     
    }
    public function getCount(){
        $sql ="SELECT COUNT(*) AS CNT FROM $this->table";
        $res =mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($res)['CNT'];
    }
    public function insert($feild,$val){
        $sql = "INSERT INTO $this->table($feild) VALUE($val)";
        return mysqli_query($this->conn,$sql); 
    }
    public function update($val,$id){
        $sql ="UPDATE $this->table SET $val WHERE `id`= '$id'";
        return mysqli_query($this->conn,$sql);
    }
    public function Delete($id){
        $sql = "DELETE FROM $this->table WHERE `id` = '$id'";
        return mysqli_query($this->conn,$sql); 
   
    }
    public function insertAndGetId(string $fields, string $val)
    {
        $sql = "INSERT INTO $this->table ($fields) VALUES ($val)";
        mysqli_query($this->conn,$sql);
        return mysqli_insert_id($this->conn); 
    }
}