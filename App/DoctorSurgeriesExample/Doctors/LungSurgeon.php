<?php

namespace App\DoctorSurgeriesExample\Doctors;

use App\DoctorSurgeriesExample\Operations\LungOperation;

class LungSurgeon extends DoctorBase
{
    public function __construct(){
        $this->setSkill(new LungOperation());

        return $this;
    }
}