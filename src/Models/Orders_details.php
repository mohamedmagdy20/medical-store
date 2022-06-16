<?php

namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;

class Orders_details extends Db
{
    public function __construct()
    {
        $this->table = "order_details";
        $this->connect();
    }
    public function selectAll($fields = "*"): array
    {
        $sql = "SELECT $fields FROM $this->table JOIN `orders` JOIN products ON orders.id =order_details.orders_id AND order_details.products_id =products.id GROUP BY order_details.id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
