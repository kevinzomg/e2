<?php
// $word = "hiiii";
// vowelCount($word);
// function vowelCount($word)
// {
//     $count = 0;
//     $wordArray = str_split($word);
//     foreach ($wordArray as $letters){
//         if (str_contains($letters, 'a')){
//             $count ++;
//         }
//         if (str_contains($letters, 'e')){
//             $count ++;
//         }
//         if (str_contains($letters, 'i')){
//             $count ++;
//         }
//         if (str_contains($letters, 'o')){
//             $count ++;
//         }
//         if (str_contains($letters, 'u')){
//             $count ++;
//         }
        
//     }
//     echo "vowel count is " .$count;
// }
// var_dump($example = (5 > 10) ? 9 : 10);

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
    public function getClassification()
    {
        $class = ($this->age < 18) ? "minor" : "adult"; 
        return $class;
        
    }
}

require 'week7view.php';