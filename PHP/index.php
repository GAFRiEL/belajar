<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Input Password</title>
    <link rel="stylesheet" href="..\bootstrap-4.3.1-dist\css\bootstrap.css">
</head>
<body>

    <div style="height: 400px;"></div>
    <div class="container-fluid">
        <form action="password-action.php" class="d-flex justify-content-center" method="post">
            <div class="form-group form-check">
                <label>Password:</label>
                <input type="password" class="form-control" style="margin-bottom: 5px;" name="pass">
                <button type="submit" class="btn btn-primary">Submit</button>    
            </div>
        </form>
    </div>
    
</body>
</html>