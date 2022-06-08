<?php
namespace Admin\Medicalstore\Validation;

class Email implements ValidationRule{
    public function check(string $name, $value)
    {
        if(! filter_var($value,FILTER_VALIDATE_EMAIL)){
            return "'$name' must be Valid Email";
        }
        else{
            return false;
        }
    }
}