<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<div class="container admin-container">
    <br>
    <br>
        <h3>Add a New Font</h3>
        <div class="col-md-12 col-lg-12">
            <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="client">Client Name</label>
                        <input type="text" class="form-control" id="client_name" placeholder="Client Name" name="client_name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="category">Category</label>
                            <select class="form-control custom-select" name="category_id">
                                <option value="1" selected>Serif</option>
                                <option value="2">Sans-serif</option>
                                <option value="3">Script</option>
                                <option value="4">Monospace</option>
                            </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="description" name="description" rows="3" required></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Image</label>
                        	<select  class="form-control imageSelect" name="image" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <br>
        </div>
</div>
<?php include 'back_footer.php'?>
<?php
    include "db.php";
    db_connect();
    
    if(isset($_POST['title']) 
    && isset($_POST['image']) 
    && isset($_POST['client_name'])
    && isset($_POST['description']) 
    && isset($_POST['category_id']) 
    && isset($_POST['submit'])){

        $connection = db_connect();
        
        if(!$connection) {
            echo "<p class='bg-danger'>Connection Failed</p>";
        }
        else {
            //set timezone
            date_default_timezone_set("America/Vancouver");
            //set charset
            mysqli_set_charset($connection, "utf8");
            //escape values from form for sql
            $title =  mysqli_real_escape_string($connection,$_POST['title']);
            $clientName =  mysqli_real_escape_string($connection,$_POST['client_name']);
            $description =  mysqli_real_escape_string($connection,$_POST['description']);
            $categoryId =  mysqli_real_escape_string($connection,$_POST['category_id']);
            $image =  mysqli_real_escape_string($connection,$_POST['image']);

            //insert
            $insert = "INSERT INTO portfolio_tb (title, image, client_name, description, category_id) 
                    VALUES ('$title','$image','$clientName', '$description', '$categoryId')";

            $insertResult = mysqli_query($connection, $insert);

            if(!$insertResult){
                echo "<div class='p-3 mb-2 bg-danger text-white'>Failed to add font!</div>";
            } else {
                echo "<div class='p-3 mb-2 bg-success text-white'>Successfully added font!</div>";
                echo "<script>window.location = 'admin.php';</script>";
                echo "<div class='p-3 mb-2 bg-success text-white'>Successfully added font!</div>";
            }
        }
        mysqli_close($connection);
    }
?>
<?php
    // Delete all session variables if user logs out
    if(!isset($_SESSION['username'])) {
        session_unset(); 
        session_destroy();
        echo "<script> location.replace('logIn.php')</script>";
    }
?> 