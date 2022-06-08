<?php

namespace Admin\Medicalstore\Validation;

interface ValidationRule{
    public function check(string $name, $value);
}
