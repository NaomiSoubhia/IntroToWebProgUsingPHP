<?php
//make PHP strict, needs to be at the start of your script
declare(strict_types=1);
/*
Lab One Instructions: 

1.) Clone or download the Lab One starter files from the course GitHub repository.
3.) Instantiate a new instance of a car object and echo the car information in the browser (/2 marks)
4.) Using your local server (XAMPP, MAMP, WAMP), create a database. Create a file called connect.php and use PDO to connect to your database. Remember to include try/catch blocks to handle connection errors. Use include/require to include this code in index.php. Add comments to explain your code (/5 marks)
6.) Add a multi-line comment in index.php reflecting on which parts of the lab you found easy and which parts were challening. (/2 marks)
7.) Congrats! All done! Add me as a collaborator to your repository (username: JessicaGilfilan) and submit a github link to your completed lab on Blackboard. (/2 marks)

/16 marks 
*/

//Create class car
class Car {
//2.) Create a PHP file called car.php. In this file, create a class to represent a car. 
//Properties should include make, model and year and include a method to return this information. 
//Use include/require to include this code in index.php. Add comments to explain your code. (/5 marks)

//Atributes
public string $make; //string
public string $model; //string
public int $year; 

function __construct(string $make, string $model, int $year)
{
   $this->make =$make;
   $this->model=$model;
   $this->year=$year;
}

public function show():string{
    
    return "Hi! The car is made by | {$this->make} |, the model is | {$this->model} | and year | {$this->year}";
}

}

$person = new Person("Naomi", 40, true);
echo $person->getBadge();


?>
