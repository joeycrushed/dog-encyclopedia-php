<?php 

    if(isset($_POST['submit'])){

        // check email
        if(empty($_POST['email'])){
            echo "an email is required <br />";
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ // built in filter for email
                echo "Email must be a valid email address";
            };
        }

        // check type
        if(empty($_POST['type'])){
            echo "an type is required <br />";
        } else {
            $type = $_POST['type'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $type)){
                echo "Title must be letters and spaces only";
            };
        }

        // check temperament
        if(empty($_POST['temperament'])){
            echo "an temperament is required <br />";
        } else {
            $temperament = $_POST['temperament'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $temperament)){
				echo 'Temperaments must be a comma separated list';
            };
    }
} 

?>

<!DOCTYPE html>
<html lang="en">

    <?php include("templates/header.php") ?>

    <section class="container grey-text">
        <h4 class="center">Add a breed</h4>
        <form class="white" action="add.php" method="POST">
            <label for="">Your Email:</label>
            <input type="text" name="email">
            <label for="">Breed Type:</label>
            <input type="text" name="type">
            <label for="">Temperament (comma seperated):</label>
            <input type="text" name="temperament">
            <div class="center">
                <input class="btn brand z-depth-0" type="submit"name="submit" value="submit">
            </div>
        </form>
    </section>

    <?php include("templates/footer.php") ?>
    
</body>
</html>