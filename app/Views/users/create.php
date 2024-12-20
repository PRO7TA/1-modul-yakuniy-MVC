<!-- views/tasks/create.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Registratsiyadan o'ting</title>
</head>

<body>
    <h1>Registratsiyadan o'ting</h1>
    <form action="/users/store" method="post">
        <input type="text" name="name" placeholder="Ism"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Parol"><br><br>
        <button type="submit">Saqlash</button>
    </form><br>
<a href="/login">Login</a>
</body>

</html>