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
    <h1 class="m-3">Oefening</h1>
    <form action="welkom.php" method="POST" class="m-3 p-3 bg-secondary rounded">
        <label for="number" class="form-label">Vul een nummer in</label>
        <input type="number" id="number" name="number" class="form-control" required><br>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</body>
</html>