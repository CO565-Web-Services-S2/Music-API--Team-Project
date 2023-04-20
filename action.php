<?php
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

// Include header and navigation templates
echo template("templates/partials/nav.php");

// Define content for add student form
$data['content'] = <<<EOD
<h2>Add New Student</h2>

<form method="post" action="action.php">
    <label>Enter Artist Name</label>
    <input type="text" name="Name">
    <input type="submit" value="Submit">
</form>
EOD;

// Check if form has been submitted
if(isset($_POST['Name'])){
    
    

    $sql = "SELECT * FROM artist WHERE ArtistName='".$_POST['Name']."'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $album = $row['Album'];
        echo "Album = $album<br/>";
        echo "Sales = $row[Sales]";
    } else {
        echo "No results found.";
    }
}

// Render the add student form
echo $data['content'];
?>