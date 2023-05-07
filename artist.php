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
<style>
    .search-box {
        top: 25%;
        left: 50%;
        width: 500px;
        position: absolute;
        transform: translate(-50%, -50%);
    }

    .btn.btn-search {
        border-radius: 0;
        height: 50px;
        background: #6c757d;
        color: #fff;
    }
</style>

<form class="form-container" role="search" method="post" action="artist.php">
    <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">
        <div class="input-group">
            <label for="name"></label>
            <input class="form-control" type="text" placeholder="Search by artist name..." id="name" name="Name" autofocus="autofocus" autocomplete="off" />
            <span class="input-group-btn">
                <button class="btn btn-search" type="submit" id="search-button">
                    <i class="fa fa-search icon search"></i>
                </button>
            </span>
        </div>
    </div>
</form>

<?php
    if (isset($_POST['Name'])) {
        $sql = "SELECT * FROM album WHERE ArtistID='" . $_POST['Name'] . "'";
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
           