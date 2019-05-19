<?php

include("../config.php");

// check if button is clicked
if (isset($_POST['add'])) {

    // fetch data from add form
    $firstName = $_POST['firstName'];
    $lastName  = $_POST['lastName'];

    // make the query
    $sql   = "INSERT INTO list (first_name, last_name) VALUE ('$firstName', '$lastName')";
    $query = mysqli_query($connect, $sql);

    // check if save success
    if ($query) {
        // if success return to list
        header('Location: ../index.php?tambah=berhasil');
    } else {
        // if failed retun to add form
        header('Location: ../add.php?tambah=gagal');
    }

} else {
    die("akses dilarang!!!");
}

?>