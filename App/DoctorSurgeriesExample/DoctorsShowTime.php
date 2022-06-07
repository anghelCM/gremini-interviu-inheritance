<?php

require_once __DIR__  . '/../../vendor/autoload.php';

use App\DoctorSurgeriesExample\Doctors\FamilyDoctor;
use App\DoctorSurgeriesExample\Operations\CheckupPatientOperation;
use App\DoctorSurgeriesExample\Operations\GivePrescriptionOperation;
use App\DoctorSurgeriesExample\Operations\LungOperation;

$doctor = new FamilyDoctor();
try{
    echo $doctor->canPerform(new LungOperation());
} catch(\Throwable $exception){
    echo $exception->getMessage()." \n\r";
}
echo "Let's try once again :D ";
try{
    echo $doctor->canPerform(new CheckupPatientOperation());
    echo $doctor->canPerform(new GivePrescriptionOperation());
} catch(\Throwable $exception){
    echo $exception->getMessage();
}