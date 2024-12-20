<?php

require_once '../app/Models/Post.php';
require_once '../core/Controller.php';

class PostController extends Controller
{
    private $postModel;

    public function __construct()
    {
        $this->postModel = new Post();
    }

    public function index()
    {
        $posts = $this->postModel->all();
        $this->view('posts/index', ['posts' => $posts]);
    }

    public function create()
    {
        $this->view('posts/create');
    }

    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $this->postModel->create($title, $content);
        header('Location: /posts/index');
    }

    public function show()
    {
        $id = $_GET['id'];
        $post = $this->postModel->find($id);
        $this->view('posts/show', ['post' => $post]);
    }

    public function edit()
    {
        $id = $_GET['id'];
        $post = $this->postModel->find($id);
        $this->view('posts/edit', ['post' => $post]);
    }

    public function update()
    {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        var_dump($id, $title, $content);
        $this->postModel->update($id, $title, $content);
        header('Location: /posts/index');
    }

    public function destroy()
    {
        $id = $_GET['id'];
        $this->postModel->delete($id);
        header('Location: /posts/index');
    }
}
