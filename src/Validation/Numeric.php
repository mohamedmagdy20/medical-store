<?php

namespace Admin\Medicalstore\Validation;

class Numeric implements ValidationRule{
    public function check(string $name, $value)
    {
        if(!is_numeric($name)){
            return "$name Muest be Number";
        }
        else{
            return false;
        }
        
    }
}