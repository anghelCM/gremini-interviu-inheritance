<?php

namespace App\DoctorSurgeriesExample\Operations;

class LungOperation implements Operation
{

    public function performOperation(): string
    {
        return " doing lung operation";
    }
}
