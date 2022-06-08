<?php
namespace Admin\Medicalstore;

class File {
    private $name,$tmpName, $uploadName;
    public function __construct(array $img)
    {
        $this->name =$img['name'];
        $this->tmpName = $img['tmp_name'];

    }
    public function rename(){
       $ext = pathinfo($this->name ,PATHINFO_EXTENSION);
       $randomStr =uniqid();
       $this->uploadName ="$randomStr.$ext";
       return $this;
    }
    public function upload(){
        $destination = PATH . "uploads/" . $this->uploadName;
        move_uploaded_file($this->tmpName,$destination);

        return $this->uploadName;
    }
    public function setNAME($name){
        $this->uploadName =$name;
        return $this;
    }
} 