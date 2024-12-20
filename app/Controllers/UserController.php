<?php

require_once '../app/Models/Post.php';
require_once '../app/Models/User.php';
require_once '../core/Controller.php';

class UserController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->all();
        $this->view('users/index', ['users' => $users]);
    }

    public function create()
    {
        $this->view('users/create');
    }

    public function store()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(!empty($name)){
        }else{
            exit("Ismingizni kiritishingiz shart");
        }
        if(!empty($email)){
        }else{
            exit("Emailinizini kiritishingiz shart");
        }
        if(!empty($password)){
        }else{
            exit("Parolinizini kiritishingiz shart");
        }
        if ($this->userModel->create($name, $email, $password)){
            $_SESSION['action'] = true;
        } else {
            exit("Foydalanuvchi qoshishda xatolik bor");
        }
        header('Location: /users/index');
    }

    public function show()
    {
        $id = $_GET['id'];
        $user = $this->userModel->find($id);
        $this->view('users/show', ['user' => $user]);
    }

    public function loginPage()
    {
        $this->view('users/login');
    }
    public function login()
    {
        $users = $this->userModel->all();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userFound = false;

        foreach ($users as $user) {
            if ($user['email'] == $email && $user['password'] == $password) {
                $userFound = true;
                $_SESSION['action'] = true;
                header('Location: /posts/index');
                exit;
            }
        }
        if (!$userFound) {
            exit("Bunday tizimda foydalanuvchi mavjud emas");
        }
    }
    public function logout(){
        session_destroy();
        header('Location: /');
    }
}
