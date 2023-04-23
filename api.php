<!-- Sudath Nawagamuwage CO551-Open Source System LoogBook 6-->
<?php 
    // Include configuration and database connection files
    include("_includes/dbconnect.inc");
    include("_includes/functions.inc");
    
    echo template("templates/partials/header.php");
    echo template("templates/partials/nav.php");
    echo template("templates/partials/footer.php");

?>
<body> 
        <h1 class="text-center">Storing API data in table</h1>
        <!-- <div id="results-container"></div> -->
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search artist by id" aria-label="Enter Artist ID" aria-describedby="button-addon2" id="search-input">
                <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button>
              </div>
              <div id="results-container"></div>
           
        </div>         
            </div>
        <script src="artistscript.js"></script>        
    </body>

           
        <style>
            .results-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
       
      /* .input-group {
        max-width: 500px;
        margin: 0 auto;
      }

      .form-control {
        flex-grow: 0; 
        border-radius: 10;
        border:10px solid #ccc;;        
        border-bottom: 2px solid #ccc;
      } */

      .btn {
        border-radius: 10;
        border: none;
        box-shadow: none;
        background-color: #ccc;
        color: #fff;
      }

      /* .btn:hover {
        background-color: #0069d9;
        color: #fff;
      } */
    </style>
        
    