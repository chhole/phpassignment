<?php
class Connect{
public $connection ="";
// Create connection
public function __construct(){
    $this->connection = new mysqli("localhost","admin", "admin","phpt");

// Check connection
    if ($this->connection->connect_error) {
        die("Connection failed: " . $this->connection->connect_error);
    }
}
}
?>

