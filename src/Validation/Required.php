<?php 

namespace Admin\Medicalstore\Validation;

class Required implements ValidationRule {

    public function check(string $name, $value)
    {
        if(empty($value)){
            return "$name is Required";
        }
        else{
            return false;
        }
    }
}