<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD | inner Join</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    
    <div class="navbar border">
        <ul class="navbar-nav">
            <li class="nav-item">
                <h3 class="">Home</h3>
            </li>
        </ul>
    </div>

    <div class="container"> <br>
        <table class="table table-borderless">
        <thead class="thead-dark">
            <tr class="border-bottom">
                <th>No</th>
                <th>Seller</th>
                <th>Product</th>
                <th>Cost</th>
            </tr>
        </thead>
        <tbody>

            <?php

            $sql = "SELECT customer.id, customer.name, items.product, items.cost, items.seller_id
                    FROM customer, items
                    WHERE customer.id=seller_id";
            $query = mysqli_query($connect, $sql);

            $no = 1;

            while($row = mysqli_fetch_array($query)){
                echo "<tr class='border-bottom'>";

                    echo "<td>".$no."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['product']."</td>";
                    echo "<td>$".$row['cost'].".00</td>";

                echo "</tr>";

                $no++;
            }

            ?>

        </tbody>
    </table>
    </div>

</body>
</html>