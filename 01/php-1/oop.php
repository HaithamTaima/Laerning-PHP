<?php
require_once './classes/Person.php';

$person =new Person;
$person2 =new Person;

$person::$country='Gaza';
$person->country='Palestine';
echo $person::$country."\n";
echo Person::$country."\n";

$person2 =$person;
$person->name='Haitham';
//$person->setGender('Mail');
    $person->setGender($person::MALE)->setBirthday('1010-10-10');
var_dump($person, $person2);
echo $person->name;
