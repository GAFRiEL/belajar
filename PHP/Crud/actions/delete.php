<?php 

include("../config.php");

// check if id is fetched
if (isset($_GET['id'])) {
    // get id from string
    $id = $_GET['id'];

    // make delete
    $sql   = "DELETE FROM list WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    // chceck if query is successfully deleted
    if ($query) {
        header('Location: ../index.php?hapus=berhasil');
    } else {
        header('Location: ../index.php?hapus=berhasil');
    }

} else {
    die("akses dilarang!!!");
}

?>