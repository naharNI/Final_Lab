<?php
    require_once("db.php");

    function login($user, $pass){
        $conn = getConnection();
        $sql = "SELECT * FROM login WHERE user ='$user' AND pass = '$pass';";
        $res = mysqli_query($conn, $sql);
        return array(mysqli_fetch_assoc($res), mysqli_num_rows($res));
    }

    function get_complaint_history_table($user){
        $conn = getConnection();
        $sql = "select * from cmplist where user='$user' order by date desc";
        $res = mysqli_fetch_all(mysqli_query($conn, $sql),MYSQLI_ASSOC);
        return $res;
    }

    function get_complaint_history_row($comno){
        $conn = getConnection();
        $sql = "select * from cmplist where comno='$comno'";
        $res = mysqli_fetch_assoc(mysqli_query($conn, $sql));
        return $res;
    }

    function delete_complaint_history_row($comno){
        $conn = getConnection();
        $sql = "delete from cmplist where comno='$comno'";
        mysqli_query($conn, $sql);
    }

    function update_complaint_history_row($comno, $category, $complaintdetials){
        $conn = getConnection();
        $sql = "UPDATE cmplist SET category='$category',complaintdetials='$complaintdetials' WHERE comno='$comno'";
        mysqli_query($conn, $sql);
    }

    function insert_complaint_history_row($user, $category, $complaintdetials){
        $conn = getConnection();
        $sql = "insert into cmplist (category,complaintdetials) VALUES ('$category','$complaintdetials')";
        mysqli_query($conn, $sql);
    }

    function get_complaint_details_table(){
        $conn = getConnection();
        $sql = "select * from cmplist order by date desc";
        $res = mysqli_fetch_all(mysqli_query($conn, $sql),MYSQLI_ASSOC);
        return $res;
    }


    class UserModel {
        private $conn;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        public function getUser($user, $pass) {
            $sql = "SELECT * FROM login WHERE user ='$user' AND pass = '$pass';";
            $res = mysqli_query($this->conn, $sql);
            return mysqli_fetch_assoc($res);
        }
    }
?>
