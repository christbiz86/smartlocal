<?php

// Interface use if we have a class that need to have different ways to do the same things but contain no any logic

interface VehicleSound {
    public function sound();
}

class Car implements VehicleSound {
    public function sound() {
        echo "Beep Beep";
    }
}

class Truck implements VehicleSound {
    public function sound() {
        echo "Mmmmmmm";
    }
}

class Airplane implements VehicleSound {
    public function sound() {
        echo "Wooshhhhh";
    }
}

$carSound = new Car();
$carSound->sound();

$truckSound = new Truck();
$truckSound->sound();

$airplaneSound = new Airplane();
$airplaneSound->sound();