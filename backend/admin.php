<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<body>
<div class="container admin-container">
    <h3 class="text-center">Portfolio Table</h3>

    <!-- //get data for table -->
        <?php 
            include "backend_db.php";
            
            db_connect();

            if(db_connect()) {
                $query =" SELECT * FROM portfolio_tb
                         INNER JOIN category_tb
                         ON category_tb.category_id=portfolio_tb.category_id
                         ORDER BY portfolio_id ";

                $queryResult = mysqli_query(db_connect(), $query);

                $numberOfRows = mysqli_num_rows($queryResult);

                if( $numberOfRows > 0 ){
                    echo "<div class='table-responsive'>";
                    echo "<table class='table table-condensed table-striped table-hover table-responsive'>";
                    echo "<tr class='info' style='width:100%;'>
                                <th>Portfolio ID</th>
                                <th>Title</th>
                                <th>Client Name</th>
                                <th>Image</th>
                                <th>Category ID</th>
                                <th>Category Name</th>
                            </tr>";

                    while($rowArray = mysqli_fetch_assoc($queryResult)) {	
                        $portfolioId = $rowArray["portfolio_id"];
                        $title = $rowArray["title"];
                        $unformattedImage = $rowArray["image"];
                        //check image path
                        if (strpos($unformattedImage, '../') !== false) {
                            //do nothing
                            $image = $unformattedImage;
                        } else {
                            //add ../ to image path
                            $image = substr_replace($unformattedImage, '../',0,0);
                        }
                        $clientName = $rowArray["client_name"];
                        //categories
                        $categoryId = $rowArray["category_id"];
                        $categoryName = $rowArray["category_name"];
                        echo "<tr>";
                            echo "<td>".$portfolioId."</td>";
                            echo "<td>".$title."</td>";
                            echo "<td>".$clientName."</td>";
                            echo "<td><img style='width:40px; height:50px' src='".$image." '></td>";
                            echo "<td>".$categoryId."</td>";
                            echo "<td>".$categoryName."</td>";
                            echo "<td><a class='btn btn-info' href='_edit.php?tb=portfolio_tb&id=".$portfolioId."'>Edit</a></td>";
                            echo "<td><a class='btn btn-danger' href='_delete_process.php?id=".$portfolioId."&tb=portfolio_tb'>Delete</a></td>";
                        echo "</tr>";
                    }

                    echo "</table>";
                    echo "</div>";
                }
                else {
                    echo "<p>No info to display!</p>";
                }
            }
            else {
                echo "Connection Failed";
            }

        ?>
</div>

<?php
    // Delete all session variables if user logs out
    if(!isset($_SESSION['username'])) {
        session_unset(); 
        session_destroy();
        echo "<script> location.replace('logIn.php')</script>";
    }
?> 

</body>
<?php include 'back_footer.php'?>