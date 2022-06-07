<?php

namespace App\DoctorSurgeriesExample\Doctors;

use App\DoctorSurgeriesExample\Operations\CheckupPatientOperation;
use App\DoctorSurgeriesExample\Operations\GivePrescriptionOperation;

class FamilyDoctor extends DoctorBase
{
    public function __construct(){
        $this->setSkill(new CheckupPatientOperation());
        $this->setSkill(new GivePrescriptionOperation());

        return $this;
    }
}