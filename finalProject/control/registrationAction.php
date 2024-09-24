<?php
require_once "../model/page_model.php";

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = sanitize($_POST['User']);
    $pass = sanitize($_POST['Password']);
    $confirmPass = sanitize($_POST['confirmPass']);

    if ($pass === $confirmPass) {
        if (insertToDatabase($user, $pass)) {
            header("Location: ../view/login.php?registration=successful");
            exit;
        }
    } else {
        header("Location: ../view/userRegistration.php?registration=failed");
        exit;
    }
}
?>
