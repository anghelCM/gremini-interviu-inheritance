<?php

namespace App\DoctorSurgeriesExample\Doctors;

use App\DoctorSurgeriesExample\Operations\Operation;

interface DoctorInterface
{
    public function addSkill(Operation $skill);
}