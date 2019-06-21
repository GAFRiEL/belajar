<?php 

include('config.php');
include('partials/header.php');

?>
    
        <!-- <a href="add.php"><button class="btn btn-outline-primar y mb-md-2"><i class="fas fa-plus-circle"></i> Tambah</button></a> -->
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>No</th>
                    <th>Nama Murid</th>
                    <th>Kelas</th>
                    <th>Nama Guru</th>
                    <!-- <th></th> -->
                </tr>
            </thead>
            <tbody>

                <?php
                $sql   = "SELECT student.first_name, student.last_name, class.grade, teacher.teacher
                            FROM student, class, teacher
                            WHERE student.class_id=class.id 
                            AND student.teacher_id=teacher.id";
                $query = mysqli_query($connect, $sql);

                $id = 1;

                while($nama = mysqli_fetch_array($query)){
                    echo "<tr>";

                        echo "<td>".$id."</td>";                
                        echo "<td>".$nama['first_name'].' '.$nama['last_name']."</td>";
                        echo "<td>".$nama['grade']."</td>";
                        echo "<td>".$nama['teacher']."</td>";


                        // echo "<td class='text-right'>";
                        //     echo "<a class='mr-md-2' href='update.php?id=".$nama['id']."'><i class='far fa-edit'></i></a>";
                        //     echo "<a href='actions/delete.php?id=".$nama['id']."'><i class='fas fa-trash'></i></a>";
                        // echo "</td>";
                
                    echo "</tr>";
                
                    $id ++;
                }

                ?>

            </tbody>
        </table>
<?php 

include('partials/footer.php');

?>