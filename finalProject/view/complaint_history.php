<?php require("../control/userControl.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="/asset/searchComplaints.js"></script>
    <link rel="stylesheet" href="complaint_history.css">
    <title> Complaint History</title>
  
</head>

<body>

    <form method = "post">
        <h3>Welcome <?php echo $user?></h3>
        <input type="button" onclick="location.href='register_complaint.php';" value ='New Complaint' />
        <button name = 'logout'>LogOut</button>
    </form>

    <br><br>

    <form method = 'post'>
        <table>
            <thead>
                <th>Complaint Number </th>
                <th>Reg Date </th>
                <th colspan="2"> Action </th>
            </thead>
           <tbody>
    <?php $complaint_histories = show_complaint_history_table(); ?>
    <?php foreach($complaint_histories as $r) { ?>
        <tr>
            <td><?php echo $r['comno']; ?></td>
            <td><?php echo $r['date']; ?></td>
            <td>
                <button class='tableButton' type='button' onclick="editComplaint(<?php echo $r['comno']; ?>)">Edit</button>
            </td>
            <td>
                <button class='tableButton' type='submit' name='delete' value="<?php echo $r['comno']; ?>">Delete</button>
            </td>
        </tr>
    <?php } ?>
</tbody>


      </table>
    </form>
                
    <fieldset style="width:40%;right:30px;top:30px; position:absolute">
        <form action="../control/updateAction.php"  method="post" onsubmit="return checkForm()">
                
            <label>Complaint Number:</label>
                    <input type="text" name="comno" id='comno' value="<?php echo  $comno ?>"
                <br>

                <label for="category">Category:</label>        
                    <select name="category" id="category" >
                        <option value="<?php echo $category ?>"><?php echo $category ?></option>
                        <option value="Toyota" > Toyota </option>
                        <option value="BMW"> BMW </option>   
                    </select>
                <br>

               
                <label for="complaint_details">Complaint Details :</label><br> 
                    <textarea id="complaint_details" name="complaint_details" rows="5" style="overflow-y: auto;"><?php echo  $complaintdetials ?></textarea>
                <span>  <?php echo $empmsg_complaint_details;  ?> </span>
                <br>

                <button type="submit" name="update">Update</button>
        </form>
    </fieldset>
    <script src="../asset/ajax.js"></script>
</body>
</html>

