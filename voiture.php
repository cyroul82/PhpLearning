<?php
class Voiture{
  private $registration;
  private $coulor;
  private $weight;
  private $power;
  private $capacity;
  private $fuel;
  private $place;
  private $insurance;
  private $message;

  public function __construct($registration, $coulor, $weight, $power, $capacity, $place){
    $this->registration = $registration;
    $this->coulor = $coulor;
    $this->weight = $weight;
    $this->power = $power;
    $this->capacity = $capacity;
    $this->place = $place;
    $this->fuel=5;
    $this->insurance = false;
    $this->message = "initializing...<br>";
  }

  public function getRegistration(){
    return $this->registration;
  }
  public function getCoulor(){
    return $this->coulor;
  }
  public function getWeight(){
    return $this->weight;
  }
  public function getPower(){
    return $this->power;
  }
  public function getCapacity(){
    return $this->capacity;
  }
  public function getFuel(){
    return $this->fuel;
  }
  public function getPlace(){
    return $this->place;
  }
  public function getInsurance(){
    return $this->insurance;
  }
  public function getMessage(){
    return$this->message;
  }


  public function setInsurance($insurance){
    $this->insurance = $insurance;
    if($insurance){
      $this->message .= "got insurance <br>";
    }
    else{
      $this->message .= "no insurance <br>";
    }
  }

  public function repaint($coulor=null){
    if(isset($coulor) && !empty($coulor) && !is_null($coulor)){
      if($this->coulor == $coulor){
        $this->message .= 'the car is the same color <br>';
        return false;
      }
      else {
        $this->coulor = $coulor;
        $this->message .= 'the car has been repainted <br>';
        return true;
      }
    }
    else return false;
  }

  public function putFuel($quantity=null){
    if(isset($quantity) && $quantity >0){
      if(( $this->fuel + $quantity ) > $this->capacity){
        $this->message.='cannot add so much fuel !<br>';
      }
      else {
        $this->fuel += $quantity;
        $this->message.='fuel added !<br>';
      }
    }
   }

   public function move($distance, $speed){
     if(isset($distance) && $distance > 0 && isset($speed) && $speed>0){
       $conso=0;
       if($speed <= 50){
         $conso = 10;
       }
       else if($speed > 50 && $speed <= 90){
         $conso=5;
       }
       else if ($speed > 90 && $speed <= 130){
        $conso=8;
       }
       else {
         $conso=12;
       }

       $max = ($this->fuel / $conso) * 100;
       if($max>$distance){
        $this->message.="not enough fuel for this distance : $distance km at $speed km/h<br>";
       }
       else{
         $this->fuel -= ($conso*$distance) / 100;
         $this->message .= "Good Travel, Thanks Renaud<br>";
       }
     }
   }


   public function __toString(){
     return sprintf("Registration : %s <br>Color : %s <br>Weight : %s <br>Power : %s <br>Capacity : %s", $this->registration, $this->coulor, $this->weight, $this->power, $this->capacity);
   }

}
 ?>
