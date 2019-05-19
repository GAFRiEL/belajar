<?php

include("config.php");
include("partials/header.php");

?>
    <h2>Tambahkan Nama</h2> <br>
    <form action="actions/add-action.php" method="post">
        <div class="form-group row">
            <label class="col-md-2 col-form-label" for="firstName">Nama Depan</label>
            <div class="col-md-6">
                <input class="form-control" type="text" name="firstName">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label" for="lastName">Nama Belakang</label>
            <div class="col-md-6">
                <input class="form-control" type="text" name="lastName">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit" name="add">DAFTAR</button>
                <a href="index.php" class="btn btn-primary">Batal</a>
            </div>
        </div>
    </form>

<?php 

include('partials/footer.php');

?>
