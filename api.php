<!-- Sudath Nawagamuwage -->
<?php 
    // Include configuration and database connection files
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    // Include the header and navigation templates
    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");
?>
<body> 
    <h1 class="text-center">Storing API data</h1>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search artist by id" aria-label="Enter Artist ID" aria-describedby="button-addon2" id="search-input">
        <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
    </div>
    <div id="results-container"></div>
    
    <!-- Include JavaScript file -->
    <script src="js/artistscript.js"></script>   
</body>

<?php
    // Include the footer template
    echo template("templates/partials/footer.php");  
?>    
    