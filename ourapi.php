<!-- Sudath Nawagamuwage -->
<!-- ourapi.php-->
<?php 
    // Include configuration and database connection files
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");

    // Include the header and navigation templates
    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");
?>
<body class="bg"> 
        <form>
        <!-- <h1 class="text-center">Storing API data</h1> -->
        <div class="col-md-6 col-lg-6 col-11 mx-auto my-auto search-box">
            <div class="input-group form-container">
                <input type="text" class="form-control" placeholder="Search artist by id" aria-label="Enter Artist ID" aria-describedby="button-addon2"
                 id="search-input" autofocus="autofocus" autocomplete="off">
                 <span class="input-group-btn">
                    <button class="btn btn-search" type="button" id="search-button">
                    <!-- <img src="images/search.png" width ="10"> -->
                    <i class="fa fa-search icon search"></i>
                    </button>
                 </span>   
            </div>    
        </div>        
        <div id="resultsAPI"></div>
    </from>
    <!-- Include JavaScript file -->
    <script src="js/ourapi.js"></script>  
</body>

<?php
    // Include the footer template
    echo template("templates/partials/footer.php");  
?>    
    