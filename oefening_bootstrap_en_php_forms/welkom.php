<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="m-3 p-3 bg-secondary rounded">
    <?php
    if (isset($_POST['number']) && is_numeric($_POST['number'])) {
        echo "<h1>De tafel van " . $_POST['number'] . " is:</h1>";
        for ($i = 1; $i <= 10; $i++) {
            echo $_POST['number'] . " x " . $i . " : " . $_POST['number'] * $i . "<br>";
        }
    } else {
        echo "Vul een nummer in!";
    }

    ?>
</div>
</body>
</html>