<!-- php header -->
<?php include "partials/header.php"?>

<!-- categories filter -->
<div class="container portfolio-container">
    <h2 class="text-center">Our Fonts</h2>
    <section class="filters">
        <div class="filters-categories">
            <p class="lead">Filter Fonts by Category</p>
            <div class="filters-toggles">
                <span class="filters-toggle active" data-category="Serif">Serif
                    <input type="checkbox" aria-label="Checkbox for following text input"checked>
                </span>
                <span class="filters-toggle active" data-category="Sans-serif">Sans-serif
                    <input type="checkbox" aria-label="Checkbox for following text input"checked>
                </span>
                <span class="filters-toggle active" data-category="Script">Script
                    <input type="checkbox" aria-label="Checkbox for following text input"checked>
                </span>
                <span class="filters-toggle active" data-category="Monospace">Monospace
                    <input type="checkbox" aria-label="Checkbox for following text input"checked>
                </span>
            </div>
        </div>
    </section>
    <!-- second card section -->
    <?php 
        include "backend/db.php";
        
        db_connect();

        if(db_connect()) {
            $query = " SELECT * FROM portfolio_tb
                      INNER JOIN category_tb
                      ON category_tb.category_id=portfolio_tb.category_id ";
            $queryResult = mysqli_query(db_connect(), $query);
            // var_dump($queryResult);

            $numberOfRows = mysqli_num_rows($queryResult);

            if( $numberOfRows > 0 ){

                echo "<div class='row portfolio-cards'>";

                while($rowArray = mysqli_fetch_assoc($queryResult)) {	

                    $portfolioId = $rowArray["portfolio_id"];
                    $title = $rowArray["title"];
                    $unformattedImage = $rowArray["image"];
                    //image has ../, remove it
                    $image = ltrim( $unformattedImage, "../" );
                    $clientName = $rowArray["client_name"];
                    $description = $rowArray["description"];
                    //categories
                    $categoryId = $rowArray["category_id"];
                    $categoryName = $rowArray["category_name"];
                    $lowerCaseCategory = strtolower($rowArray["category_name"]);
                    echo "
                        <div class='category col-lg-4 col-md-4 col-sm-6 col-xs-6 card-mobile' data-category='".$categoryName."'>
                            <input type='hidden' name='".$portfolioId."' value='".$portfolioId."'>
                            <input type='hidden' name='".$categoryId."' value='".$categoryId."'>
                            <div class='card'>
                            <img class='card-img-top' src='$image' alt='Card image'>
                            <div class='card-body'>
                                <h4 class='card-title title'>$title</h4>
                                <p class='card-text text-muted'>Category: $categoryName</p>
                                <p class='card-text price'>$clientName</p>
                                <p class='card-text'>$description</p>
                                <button type='button' class='btn btn-primary buy-btn'>Buy</button>
                            </div>
                            </div>
                        </div>
                        ";
                }
                echo "</div>";
            }
            else {
                echo "<p>No info to display!</p>";
            }
        }
        else {
            echo "<p>Connection Failed</p>";
        }

    ?>
</div>
<!-- php footer -->
<?php include "partials/footer.php"?>
<script src="js/filter.js"></script>