<?php 

include('config.php');
include('partials/header.php');

?>
    
        <a href="add.php"><button class="btn btn-outline-primary mb-md-2"><i class="fas fa-plus-circle"></i> Tambah</button></a>
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql   = "SELECT * FROM list";
                $query = mysqli_query($connect, $sql);

                $id = 1;

                while($nama = mysqli_fetch_array($query)){
                    echo "<tr>";

                        echo "<td>".$id."</td>";                
                        echo "<td>".$nama['first_name']."</td>";
                        echo "<td>".$nama['last_name']."</td>";

                        echo "<td class='text-right'>";
                            echo "<a class='mr-md-2' href='update.php?id=".$nama['id']."'><i class='far fa-edit'></i></a>";
                            echo "<a href='actions/delete.php?id=".$nama['id']."'><i class='fas fa-trash'></i></a>";
                        echo "</td>";
                
                    echo "</tr>";
                
                    $id ++;
                }

                ?>

            </tbody>
        </table>
<?php 

include('partials/footer.php');

?>