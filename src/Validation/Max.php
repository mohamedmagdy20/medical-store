<?php
namespace Admin\Medicalstore\Validation;

class Max implements ValidationRule{
    public function check(string $name, $value)
    {
        if(strlen($value)>255){
            return "$name greatrer than 255 character";
        }
        else 
        {
            return false;
        }
    }
}