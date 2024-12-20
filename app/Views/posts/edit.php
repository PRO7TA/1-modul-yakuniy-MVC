<!-- views/tasks/edit.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
</head>

<body>
    <h1>Edit Post</h1>
    <form action="/posts/update?id=<?= $post['id']; ?>" method="post">
        <input type="text" name="title" value="<?= $post['title']; ?>" required><br>
        <textarea name="content"><?= $post['content']; ?></textarea><br>
        <button type="submit">Update Post</button>
    </form>
</body>

</html>