<?php

namespace App\DoctorSurgeriesExample\Doctors;

use App\DoctorSurgeriesExample\Operations\Operation;

class DoctorBase implements DoctorInterface
{
   private $skills = [];

   public function getSkills(): array
   {
       return $this->skills;
   }

   public function setSkill($skill)
   {
       $this->addSkill($skill);

       return $this;
   }

   public function addSkill(Operation $skill): void
   {
       if(!in_array($skill, $this->skills)){
           $this->skills[] = new $skill();
       }
   }

    /**
     * @param $skill
     * @return bool
     * @throws \Exception
     */
    public function canPerform(Operation $skill): string
   {
       if (!in_array($skill, $this->skills)) {
           throw new \Exception("You can't perform an skill which wasn't learnt");
       }
       return $skill->performOperation();
   }
}
