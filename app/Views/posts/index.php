<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Post List</h1>
    <a href="/logout">Logout</a><br>
    <a href="/posts/create">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <h2><?= $post['title'] ?></h2>
                <a href="/posts/show?id=<?= $post['id'] ?>">Show</a>
                <a href="/posts/edit?id=<?= $post['id'] ?>">Edit</a>
                <a href="/posts/delete?id=<?= $post['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>