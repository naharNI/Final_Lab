<?php

    require_once("../model/page_model.php"); 
    require("sessionCheck.php"); 
    echo "<script src='../asset/validateForm.js'></script>";
     
    $comno=$category=$complaintdetials='';
    $empmsg_category= $empmsg_subcategory=$empmsg_complaint_details='';


    function show_complaint_history_table(){
        global $user;
        return get_complaint_history_table($user);
    }

    
    
    if(isset($_POST['logout'])){
        setcookie('user','',time() - 1000,'/');
        header("location:../view/login.php");
    }
    
    if(isset($_POST['delete'])){
        'delete_complaint_history_row'($_POST['delete']);
    }

    if(isset($_POST['edit'])){
        $comno = $_POST['edit'];
        $e_res = get_complaint_history_row($comno);

        $category=$e_res['category'];
        $complaintdetials=$e_res['complaintdetials'];
    }

    if(isset($_POST['update'])){
        $comno = $_POST['comno'];
        $category=$_POST['category'];
        $complaintdetials=$_POST['complaint_details'];

        
    }

    if(isset($_POST['submit'])){

        $category=$_POST['category'];
        
        $complaintdetials=$_POST['complaint_details'];
       
        $err = 0;

        if(empty ($category)) {
            $empmsg_category = 'Please select a Category'; $err+=1;
        }

        if(empty ($complaintdetials)) {
            $empmsg_complaint_detials = 'Please Write some details'; $err+=1;
        }
        
        if ($err == 0){

            insert_complaint_history_row($user, $category, $complaintdetials);
            header("location:complaint_history.php");
        } 

    }

?>
