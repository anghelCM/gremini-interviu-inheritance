<?php

namespace App\DoctorSurgeriesExample\Operations;

class GivePrescriptionOperation implements Operation
{

    public function performOperation(): string
    {
        return " giving prescriptions ";
    }
}