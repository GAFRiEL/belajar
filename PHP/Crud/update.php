<?php

include("config.php");
include("partials/header.php");

// check if id is in the string
if (!isset($_GET['id'])) {
    header('Location: index.php?id=not-found');
}

// fetch id from string
$id = $_GET['id'];

// create query to fetch from database
$sql = "SELECT * FROM list WHERE id=$id";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_assoc($query);

// if data not found
if (mysqli_num_rows($query) < 1) {
    die("Data not found!!!");
}

?>

    <h2>Ubah Nama</h2>
    <form action="actions/update-action.php" method="post">
        <input class="form-control" type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <div class="form-group row">
            <label class="col-md-2 col-form-label" for="firstName">Nama Depan</label>
            <div class="col-md-6">
                <input class="form-control" type="text" name="firstName" value="<?php echo $data['first_name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label" for="lastName">Nama Belakang</label>
            <div class="col-md-6">
                <input class="form-control" type="text" name="lastName" value="<?php echo $data['last_name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit" name="update">Ubah</button>
                <a href="index.php" class="btn btn-primary">Batal</a>
            </div>
        </div>
    </form>

<?php 

include('partials/footer.php');

?>