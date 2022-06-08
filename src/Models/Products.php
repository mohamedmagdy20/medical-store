<?php
namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;

class Products extends Db{
    public function __construct()
    {
        $this->table ="products";
        $this->connect();
    }
    public function selectfromId($id,$feild="*"){
        $sql = "SELECT $feild FROM $this->table JOIN cats ON $this->table.cat_id = cats.id  WHERE $this->table.id = '$id'";
        $result = mysqli_query($this->conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $data[]= $row;
        }
        return (!empty($data))?$data:[];
    }
    
    public function selectAll($fields= "*"): array{
        $sql = "SELECT $fields FROM `$this->table` JOIN `cats`
         ON $this->table.cat_id = cats.id ORDER BY $this->table.id ";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
}