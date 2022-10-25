<?php

    interface Truck {
        public function setTruckModel($name);
        public function getTruckModel();
    }
    interface Wheels {
        public function setHasWheels($bool);
        public function getHasWheels();
    }
    class TruckDetails implements Truck, Wheels {
        private $model;
        private $hasWheels;
      
        public function setTruckModel($name) {
            $this->model = $name;
        }
      
        public function getTruckModel() {
            return $this->model;
        }
      
        public function setHasWheels($bool) {
            $this->hasWheels = $bool;
        }
      
        public function getHasWheels() {
            return ($this->hasWheels)? " has wheels. " : " has no wheels. ";
        }
    }

    $details = new TruckDetails();
    $details->setTruckModel("Toyota");
    $details->setHasWheels(true);
    echo $details->getTruckModel();
    echo $details->getHasWheels();

    echo "<br>";

    $details1 = new TruckDetails();
    $details1->setTruckModel("Marcedes");
    $details1->setHasWheels(false);
    echo $details1->getTruckModel();
    echo $details1->getHasWheels();

?>