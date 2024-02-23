<?php

namespace Ducan\Mvcoop\Controllers\Admin;

use Ducan\Mvcoop\Commons\Controller;
use Ducan\Mvcoop\Models\User;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];

            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors']['email'] = 'Email khong hop le!';
            }

            if (empty($password)) {
                $_SESSION['errors']['password'] = 'Password khong duoc de trong!';
            }

            $user = (new User)->getbyEmailAndPassword($_POST['email'], $_POST['password']);


            if (empty($user)) {
                $_SESSION['errors']['not-found'] = 'Khong tim thay nguoi dung';
            } else {
                $_SESSION['user'] = $user;
                header('location: /admin/');
                exit();
            }
        }
        return $this->renderViewAdmin(__FUNCTION__);
    }
    public function logout()
    {
        session_destroy();
        header('location: /');
        exit();
    }
}
