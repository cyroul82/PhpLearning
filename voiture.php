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
    $this->message = 'initializing...';
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
      $this->message = "got insurance";
    }
    else{
      $this->message = "no insurance";
    }
  }

  public function repaint($coulor=null){
    if(isset($coulor) && !empty($coulor) && !is_null($coulor)){
      if($this->coulor == $coulor){
        $this->message = 'the car is the same color';
        return false;
      }
      else {
        $this->coulor = $coulor;
        $this->message = 'the car has been repainted';
        return true;
      }
    }
    else return false;
  }

}
 ?>
