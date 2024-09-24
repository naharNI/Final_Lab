<?php require("../control/adminControl.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Complaint History</title>
    <link rel="stylesheet" href="complaint_details.css">
</head>

<body>

    <form method = "post">
        <h3>Admin_Dashboard</h3>
        <button name = 'logout'>LogOut</button>
    </form>

    <br><br>

    <form method = 'post'>
        <table border ="1">
            <tr>
                <th>Complaint Number </th>
                <th>Reg Date </th>
                <th> Action </th>
            </tr>
            <?php show_complaint_details_table(); ?>
      </table>
    </form>
                
    <fieldset style="width:40%;right:30px;top:30px; position:fixed">
        <form  method="post" enctype="multipart/form-data">
            
            <label for="category">Category:</label>        
                <select name="category" id="category" >
                    <option value=<?php echo $category ?>><?php echo $category ?></option>
                    <option value="Toyota" >Toyota</option>
                    <option value="BMW">BMW</option>   
                </select>
                <br>

            <label for="complaint_details">Complaint Details :</label><br> 
                <textarea name="complaint_details" cols="50" rows="10"><?php echo  $complaintdetials ?></textarea>
            <br>

            <button type="submit" name="stp">Send to person</button>
        </form>
    </fieldset>

    <script type="text/javascript" src="/asset/validateForm.js"></script>  

</body>
</html>

