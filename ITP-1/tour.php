<?php
    include 'config.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tour.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Discover</title>
</head>
<body>
    <main id="header">
        <nav>
            <h1>TOURISM</h1>
            <div class="nav-links">
                <ul>
                    <li><a href="web.php">Home</a></li>
                    <li><a href="web.php">About</a></li>
                    <li><a href="web.php">Discover</a></li>
                    <li><a href="web.php ">Contacts</a></li>
                </ul>
            </div>
        </nav>
    </main>
    <!-- slides -->
    <section>
        <form method="REQUEST" action="search.php">
            <input type="text" name="search" placeholder="Enter Search">
            <button type="submit" name="search">Search</button>
        </form>
        <?php
        $sql = "SELECT * FROM tblcard";
        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);

        if($queryResult > 0){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['Id'];
                $title = $row['Title'];
                $content= $row['Content'];
                $image = $row['Image'];
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $image;?>" width="400px" height="200px" alt="Images">
                        <div class="card-body">
                            <h2 class="card-title"> <?php echo $row['Title'];?></h2>
                            <p class="card-text"> <?php echo $row['Content'];?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }

        
        ?>
        
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>