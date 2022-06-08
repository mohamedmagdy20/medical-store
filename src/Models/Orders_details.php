<?php
namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;

class Orders_details extends Db{
    public function __construct()
    {
        $this->table = "order_details";
        $this->connect();
    }
}