<?php

namespace App\DoctorSurgeriesExample\Operations;

class BonesOperation implements Operation
{

    public function performOperation(): string
    {
        return " doing bone operation ";
    }
}
