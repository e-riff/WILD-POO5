    <?php
    require_once './Vehicle.php';

    class Camion extends Vehicle
    {
        private int $stockCapacity;
        private int $Chargement = 0;
        private string $energy;


        //Construct
        public function __construct(string $color, int $nbSeats, string $energy, string $stockCapacity)
        {
            parent::__construct($color, $nbSeats);
            $this->setEnergy($energy);
            $this->setStockCapacity($stockCapacity);
        }

        //Energy
        public function setEnergy(string $energy): Camion
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }
        public function getEnergy(): string
        {
            return $this->energy;
        }


        //Stock Capacity
        public function getStockCapacity(): int
        {
            return $this->stockCapacity;
        }

        public function setStockCapacity($stockCapacity): void
        {
            $this->stockCapacity = $stockCapacity;
        }

        //
        public function getChargement(): int
        {
            return $this->Chargement;
        }

        public function setChargement($Chargement)
        {
            $this->Chargement = $Chargement;
        }



        //Is it full ?
        public function charge(): string
        {
            if (($this->getStockCapacity() - $this->getChargement()) > 0) {
                return "in filling";
            } else {
                return "full";
            }
        }
    }
