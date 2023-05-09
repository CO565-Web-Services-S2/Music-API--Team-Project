<?php
   // Include configuration and database connection files
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
   // Include the header and navigation templates
   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // Set the welcome message
   $data['content'] = '<div class="row justify-content-center">
         <div class="col-lg-6 text-center">
            <h2>Welcome to our Music API</h2>
            <p>Search for your favorite artists and get information about their albums, 
                  songs, and more!</p>              
         </div>
      </div>';
   
   // Display the welcome message
   // echo template("templates/default.php", $data);
   
   // Include the footer template
   echo template("templates/partials/footer.php");  
?>

