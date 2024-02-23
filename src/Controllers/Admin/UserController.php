<?php

namespace Ducan\Mvcoop\Controllers\Admin;

use Ducan\Mvcoop\Commons\Controller;
use Ducan\Mvcoop\Models\User;

class UserController extends Controller
{
    private User $user;

    private string $folder = 'users.';

    public function __construct()
    {
        $this->user = new User;
    }

    // Danh sách
    public function index()
    {
        $data['users'] = $this->user->getAll();

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Thêm mới
    public function create()
    {
        if (!empty($_POST)) {
            $this->user->insert($_POST['name'], $_POST['email'], $_POST['password']);

            header('Location: /admin/users');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Xem chi tiết theo ID
    public function show($id)
    {
        $data['user'] = $this->user->getByID($id);

        if (empty($data['user'])) {
            die(404);
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Cập nhật theo ID
    public function update($id)
    {
        $data['user'] = $this->user->getByID($id);

        if (empty($data['user'])) {
            die(404);
        }

        if (!empty($_POST)) {
            $this->user->update(
                $id,
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            );

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /admin/users/$id/update");
            exit();
        }

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Delete theo ID
    public function delete($id)
    {
        $this->user->deleteByID($id);

        header('Location: /admin/users');
        exit();
    }
}
