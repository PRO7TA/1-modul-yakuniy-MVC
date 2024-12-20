<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
</head>

<body>
    <h1>Users List</h1>
    <a href="/posts/index">Posts</a><br><br>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <a href="/users/show?id=<?= $user['id'] ?>"><?= $user['name'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>