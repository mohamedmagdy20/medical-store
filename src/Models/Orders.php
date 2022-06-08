<?php
namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;

class Orders extends Db{

    public function __construct()
    {
        $this->table = "orders";
        $this->connect();
    }
    public function selectAll($fields= "*"): array{
        $sql = "SELECT $fields FROM $this->table JOIN `order_details` JOIN products ON orders.id =order_details.orders_id AND order_details.products_id =products.id GROUP BY orders.id";
        $result = mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
}