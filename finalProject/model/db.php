<?php 
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "complaint";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;
    }
    function updateData($user,$complain_number,$category,$complain_detailes){
        $conn = getConnection();
        $sql = "insert into cmplist (category,complaintdetials,user,comno) VALUES ('$category','$complain_detailes','$user','$complain_number');";
        mysqli_query($conn, $sql);
    }
?>