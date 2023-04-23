<?php
   // Include configuration and database connection files
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
   
   
   
   // Include the header and navigation templates
   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // Set the welcome message
   $data['content'] = '<div class="content"><p>Welcome to our Music API.</p></div>';
   // echo $data['content']; 
   echo template("templates/default.php", $data);
   
   // Include the footer template
   echo template("templates/partials/footer.php");

   

?>

