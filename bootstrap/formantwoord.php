<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
    <?php

    include "nav.php"
    ?>
    <header class="row mt-3 container-fluid">
        <div class="col-md-12 bg-light text-body">
            <p class="h1 m-3">hello!</p>
        </div>
    </header>
    <?php

    echo $_POST["fname"] . " " . $_POST["lname"] . PHP_EOL;
    echo $_POST["email"];
    ?>
</div>
</body>
</html>