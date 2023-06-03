<?php
include 'config.php';

?>

<div class="article-container">
    <?php
    if(isset($_POST['search'])){
        $search = mysqli_real_escape_string($con, $_POST['search']);
        $sql ="SELECT * FROM tblcard WHERE Title LIKE '%$search%' ";
        $result = mysqli_query($con, $sql);
        $queryResult = mysqli_num_rows($result);
        echo "<h4>Results..</h4>";
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
        }else{
            echo "No result";
        }
    }
    
    
    
    ?>
</div>