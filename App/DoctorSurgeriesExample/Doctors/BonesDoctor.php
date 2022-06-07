<?php

namespace App\DoctorSurgeriesExample\Doctors;

use App\DoctorSurgeriesExample\Operations\BonesOperation;

class BonesDoctor extends DoctorBase
{
    public function __construct(){
        $this->setSkill(new BonesOperation());

        return $this;
    }
}