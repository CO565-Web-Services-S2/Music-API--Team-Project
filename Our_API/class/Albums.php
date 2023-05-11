<?php

class album 
{
    
    function __construct($db) {
        $this->conn = $db;
    }

    function read(){	
        if($this->ArtistID) {
            $stmt = $this->conn->prepare("SELECT * FROM album WHERE ArtistID = ?");
            $stmt->bind_param("i", $this->ArtistID);					
        } else {
            $stmt = $this->conn->prepare("SELECT * FROM album");		
        }		
        $stmt->execute();			
        $result = $stmt->get_result();		
        return $result;	
    }

}
