<?php
class Database{
	
	private $host  = 'localhost';
	private $user  = 'sudath';
	private $password   = "test123";
	private $database  = "db3_musicapi"; 
    
	public function getConnection(){		
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if($conn->connect_error){
            die("Error failed to connect to MySQL: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
