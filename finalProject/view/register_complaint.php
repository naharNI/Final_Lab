<?php require("../control/userControl.php"); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Complaint Registration</title>
        <link rel="stylesheet" href="register_complaint.css">
        <script src="../asset/validateForm.js"></script>
    </head>

    <body>
        <form class='top' method = "post">
            <h3>Welcome <?php echo $user?> &nbsp;</h3>
            <button name = 'logout'>LogOut</button>
        </form>

        <form method="post" onsubmit="return complaintForm()">
            <h1>Complaint Registration</h1>
            
            <label for="category">Category:</label>        
                <select name="category" id="category" >
                    <option value="">Select Category </option>
                    <option value="Category 1" >Toyota</option>
                    <option value="Category 2">BMW</option>   
                </select>
            <span id='catErr'></span>
            <br>

            <label for="complaint_details">Complaint Details :</label> 
                <textarea name="complaint_details" id='complaint_details' cols="50" rows="10"></textarea>
            <span id='detailErr'></span>
            <br>

            <button type="submit" class='formButton submit' name="submit">Submit Complaint</button>
            <input type="button" class='formButton cancel' onclick="location.href='complaint_history.php';" value ='Cancel' />
        </form>
        
    </body>
</html>
