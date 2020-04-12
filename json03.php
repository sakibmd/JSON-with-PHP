<?php
class Person {
    public $firstName;
    public $lastName;
}

$p = new Person();
$p->firstName = "John";
$p->lastName = "Doe";

$jsonData = json_encode( $p );
echo $jsonData."<br>";


$decodedJSONData = json_decode( $jsonData, true ); //true dilee array return korbe otherwise object
print_r( $decodedJSONData );
echo "<br>";
// echo $decodedJSONData['firstName']."\n";

print_r( json_decode( json_encode( array('key' => 'value') ) ) ); // return objectwise