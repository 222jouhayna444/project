<?php

class Chambre
{
    
    

    // Object properties
    public $id;
    public $room_number;
    public $price;
    public static $errorMsg = "";

    public static $successMsg="";
    // Constructor with the database connection
    public function __construct($room_number,$price)
    {
      
        $this->room_number = $room_number;
    $this->price = $price;
    }

    // Create chambre
    $sql = "INSERT INTO $tableName (room_number, price)
VALUES ('$this->room_number', '$this->price')";
if (mysqli_query($conn, $sql)) {
self::$successMsg= "New record created successfully";

} else {
    self::$errorMsg ="Error: " . $sql . "<br>" . mysqli_error($conn);
}



}

    // Other methods (e.g., read, update, delete) can be added based on your requirements
}
?>
