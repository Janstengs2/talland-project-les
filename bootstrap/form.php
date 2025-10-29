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
        <div class="col-md-12 bg-light">
            <p class="h1 text-body p-5">form</p>
        </div>
    </header>
    <form class="mt-5" action="formantwoord.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Enter first name" name="fname">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Enter last name" name="lname">
            </div>
            <div class="col">
                <input type="email" class="form-control" placeholder="Enter email" name="email">
            </div>
        </div>
        <input class="mt-3" type="submit" value="submit">
    </form>
</div>

</body>
</html>