<!-- Sudath Nawagamuwage -->
<!-- header file for my page -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">        
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/pagelayout.css"/>
    <title>Music API</title>	
    <!-- styles and JS here --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
    crossorigin="anonymous">
</head>
<body>
    <div class="page-container">
        <header>
            <h1><h1>Music API</h1></h1>
        </header>
        <div class="content-wrap">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link" href="modules.php">Home</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="assignmodule.php">Library</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="details.php">Playlist</a>
                                </li>        
                            </ul>
                            <form class="d-flex" role="search" method="post" action="action1.php">
                                <label for="name"></label>
                                <input class="form-control me-2" type="text" placeholder="Search..." id="name" name="Name" />
                                <button class="btn btn-outline-success" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <?php 
                    include("_includes/dbconnect.inc");
                    $sql = "SELECT * FROM artist WHERE ArtistName='$_POST[Name]'";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($result);
                ?>
            <table>
                <tr>
                    <th>ArtistID</th>
                    <th>ArtistName</th>
                    <th>Album</th>
                    <th>Sales</th>
                </tr>
                <tr>
                    <td><?php echo $row['ArtistID']; ?></td>
                    <td><?php echo $row['ArtistName']; ?></td>
                    <td><?php echo $row['Album']; ?></td>
                    <td><?php echo $row['Sales']; ?></td>
                </tr>
            </table>
        </div> 

            <!-- Sudath Nawagamuwage -->
            <!-- footer file for my page -->
        </div>
    </div>
    <!-- footer -->
    <footer class="footer">
        <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css"/>
        <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" 
crossorigin="anonymous"></script>
</body>
</html>