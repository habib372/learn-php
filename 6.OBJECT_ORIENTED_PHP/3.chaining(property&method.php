<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property and method chaining</title>
</head>
<body>

    <?php       // How much fuel is left after driving 50 miles on 10 gallons of fuel?
    
        class Truck{
            
            public $fuelInTank;

            public function fuel($gallon){
                $this->fuelInTank += $gallon;
                return $this;
            }
            public function totalRide($miles){
                $gallons = $miles/60;
            $this->fuelInTank -= ($gallons);
                return $this;
            }
        }

        $truck = new Truck();

        $fuelInTank = $truck->fuel(10)->totalRide(50)->fuelInTank;

        echo "Fuel left:  ' $fuelInTank ' gallons.";

    ?>

</body>
</html>