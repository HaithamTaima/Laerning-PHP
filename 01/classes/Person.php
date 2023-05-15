<?php
class Person
{
//constant
    const MALE='M';
    const  FEMALE='F';

  public $name;
  protected $gender='male';
  private  $barthay;

  //static
 public static $country;

  public function setGender($gender)
  {
    $this -> gender = $gender;
    return $this;
  }

  public  function setBirthday($birthday)
  {
      $this->barthay=$birthday;
      return $this;
  }

  //static methotds

    public static function country($country =null)
    {
      if ($country){
          Person::$country=$country;
          return;

      }
      return self::$country;
      return static::$country;
    }

}
