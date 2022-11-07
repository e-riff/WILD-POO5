 <?php

   require_once './Vehicle.php';

   class Bicycle extends Vehicle implements LightableInterface
   {
      private bool $isLightOn = false;

      public function switchOn(): bool
      {
         return $this->isLightOn = $this->currentSpeed > 10 ? true : false;
      }
      public function switchOff(): bool
      {
         return $this->isLightOn = false;
      }
   }
