<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/Database.php';
include_once '../class/Albums.php';

$database = new Database();
$db = $database->getConnection();
 
$album = new album($db);

$album->ArtistID = (isset($_GET['ArtistID']) && $_GET['ArtistID']) ? $_GET['ArtistID'] : '0';

$result = $album->read();

if($result->num_rows > 0){    
    $AlbumRecords=array();
    $AlbumRecords["album"]=array(); 
	while ($item = $result->fetch_assoc()) { 	
        extract($item); 
        $itemDetails=array(
            "ArtistID" => $ArtistID,
            "Album" => $Album,
            "Released" => $Released,
			"Sales" => $Sales,
            "ArtistName" =>	$ArtistName	
        ); 
       array_push($AlbumRecords["album"], $itemDetails);
    }    
    http_response_code(200);     
    echo json_encode($AlbumRecords);
}else{     
    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );
}
