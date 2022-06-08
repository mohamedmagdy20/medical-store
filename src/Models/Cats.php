<?php
namespace Admin\Medicalstore\Models;

use Admin\Medicalstore\Db;

class Cats extends Db{
    public function __construct()
    {
        $this->table = "cats";
        $this->connect();
    }
    
}