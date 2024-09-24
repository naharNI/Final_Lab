<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="stylesheet" href="userRegistration.css">
</head>

<body>

    <div class="container">
        <h1>Registration</h1>

        <?php
        if (isset($_GET['registration']) && $_GET['registration'] === 'failed') {
            echo '<p style="color:Blue ">Registration failed. Please try again!!</p>';
        }
        ?>

        <form action="../control/registrationAction.php" method="post" novalidate>
            <div class="form-row">
                <label for="user">User :</label>
                <input type="text" name="User" id="user" >
            </div>

            
            <div class="form-row">
                <label for="pass">Password :</label>
                <input type="text" name="Pass" id="pass" >
            </div>

            <div class="form-row">
                <label for="confirmPass">Confirm Password :</label>
                <input type="text" name="confirmPass" id="confirmPass" >
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

</body>

</html>