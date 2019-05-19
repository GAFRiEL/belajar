<?php

include('../config.php');

// check if button is clicked 
if(isset($_POST['update'])) {
    // get data from form
    $id        = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];

    // make update
    $sql   = "UPDATE list SET first_name='$firstName', last_name='$lastName' WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    // check if update is success
    if ($query) {
        header('Location: ../index.php?edit=berhasil');
    } else {
        header('Location: ../index.php?edit=gagal');
    }

} else {
    die("akses dilarang!!!");
}