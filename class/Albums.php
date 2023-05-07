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

    function create() 
    {
        $stmt = $this->conn->prepare("INSERT INTO album (`ArtistID`, `Album`, `Released`, `Sales`) VALUES (?,?,?,?)");
        
        $this->ArtistID = htmlspecialchars(strip_tags($this->ArtistID));
        $this->Album = htmlspecialchars(strip_tags($this->Album));
        $this->Released = htmlspecialchars(strip_tags($this->Released));
        $this->Sales = htmlspecialchars(strip_tags($this->Sales));
        
        $stmt->bind_param( $this->ArtistID, $this->Album, $this->Released, $this->Sales);
        
        if($stmt->execute()) {
            return true;
        }
        return false;		 
    }
    
}
