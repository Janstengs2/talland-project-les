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
    <div class="container-fluid p-5 bg-primary text-center">
        <?php

        include "nav.php";
        ?>
        <header class="row mt-3 container-fluid">
            <div class="col-md-12 bg-light">
                <p class="h1 p-4 text-start">hello world</p>
            </div>
            <?php

            include "carousel.php";
            ?>
        </header>
        <main class="row mt-3">
            <div class="col-md-4 bg-light p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto assumenda blanditiis commodi cum cumque deserunt earum, eligendi facere harum perspiciatis porro veniam voluptate. Nisi, quisquam, tempore. Amet, minima, nihil?</div>
            <div class="col-md-4 bg-light p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto assumenda blanditiis commodi cum cumque deserunt earum, eligendi facere harum perspiciatis porro veniam voluptate. Nisi, quisquam, tempore. Amet, minima, nihil?</div>
            <div class="col-md-4 bg-light p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto assumenda blanditiis commodi cum cumque deserunt earum, eligendi facere harum perspiciatis porro veniam voluptate. Nisi, quisquam, tempore. Amet, minima, nihil?</div>
        </main>
    </div>
</body>
</html>