<?php
    require_once("../model/page_model.php");
    require("sessionCheck.php"); 
    
    if(isset($_POST['logout'])){
        setcookie('user','',time() - 1000,'/');
        header("location:login.php");
    }
   
    $category=$complaintdetials=$edit='';

    if(isset($_POST['delete'])){
        delete_complaint_history_row($_POST['delete']);
    }

    if(isset($_POST['view'])){
        $v_res = get_complaint_history_row($_POST['view']);
        $view = $_SESSION['view'] = $_POST['view'];

        $user = $_SESSION['u'] =  $v_res['user'];
        $complaintdetials=$v_res['complaintdetials'];
        $category=$v_res['category'];

    }
    function show_complaint_details_table(){
        foreach(get_complaint_details_table() as $r){ 
            echo "<tr>";
            echo "<td>$r[comno]</td>";
            echo "<td>$r[date]</td>";                        
            echo "<td><button type='submit' name='view' value='$r[comno]'>View</button></td>";
            echo "</tr>";
        }
    }
?>