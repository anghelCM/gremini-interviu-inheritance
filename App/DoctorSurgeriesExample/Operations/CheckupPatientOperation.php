<?php

namespace App\DoctorSurgeriesExample\Operations;

class CheckupPatientOperation implements Operation
{

    public function performOperation(): string
    {
        return " doing checkup operation";
    }
}