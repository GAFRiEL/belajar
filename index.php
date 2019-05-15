<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }</style>
</head>

<body>

    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="JavaScript/">JavaScript</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Php/">PHP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="html/">HTML</a>
            </li>
        </ul>
    </div>

    <div class="footer">
        <div class="d-flex text-center justify-content-center">
            <div class="info"><br />
                <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />
            </div>
        </div>
    </div>

</body>

</html>