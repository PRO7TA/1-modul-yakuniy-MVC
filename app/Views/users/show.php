<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users show</title>
</head>

<body>
    <h1> <?php echo $user['name'] ?></h1>
    <p> <?php echo $user['email'] ?> </p>
    <br>
    <a href="/users/index">Back to users List</a>
</body>

</html>