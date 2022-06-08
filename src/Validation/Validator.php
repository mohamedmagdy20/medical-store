<?php

namespace Admin\Medicalstore\Validation;

class Validator{
    protected $errors =[];

    public function validate(string $name, $val, array $rules){
        foreach($rules as $rule){
            $className = "Admin\\Medicalstore\\Validation\\" . $rule;
            $obj = new $className;
            $errors = $obj->check($name,$val);
            if($errors !== false){
                $this->errors[]=$errors;
                break;
            }
        }
    }
    public function hasError(){
        return !empty($this->errors);   
    }
    public function getError(){
        return $this->errors;
    }
}