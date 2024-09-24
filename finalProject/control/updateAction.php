<?php
include "../model/db.php";
session_start();
$user=$_SESSION['user'];
$complain_number = $_POST['comno'];
$category = $_POST['category'];
$complain_detailes = $_POST['complaint_details'];
updateData($user,$complain_number,$category,$complain_detailes);
header("Location: ../view/complaint_history.php");
?>