<!-- Sudath Nawagamuwage -->
<!-- header file for my page -->
<?php 
    // Include configuration and database connection files
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");
    
    // Include the header and navigation templates
    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");
    
?>

<form class="d-flex" role="search" method="post" action="artist.php">
    <label for="name"></label>
    <input class="form-control me-2" type="text" placeholder="Search..." id="name" name="Name" />
    <button class="btn btn-outline-success" type="submit">Submit</button>
</form>

<?php
    if (isset($_POST['Name'])) {
        $sql = "SELECT * FROM artist WHERE ArtistName='" . $_POST['Name'] . "'";
        $result = mysqli_query($conn,$sql);

        $data = array();
        $data['content'] = "<table class='artist-table'>";
        $data['content'] .= "<tr><th colspan='4'>Artist</th></tr>";
        $data['content'] .= "<tr><th>ArtistID</th><th>ArtistName</th><th>Album</th><th>Sales</th></tr>";

        // Display the modules within the html table
        while($row = mysqli_fetch_array($result)) {
            $data['content'] .= "<tr><td>" . $row['ArtistID'] . "</td>"; 
            $data['content'] .= "<td>" . $row['ArtistName'] . "</td>"; 
            $data['content'] .= "<td>" . $row['Album'] . "</td>"; 
            $data['content'] .= "<td>" . $row['Sales'] . "</td></tr>"; 
        }
        
        $data['content'] .= "</table>";

        // render the template
        echo template("templates/default.php", $data);
    }
    // Include the footer template
    echo template("templates/partials/footer.php");
?>
           