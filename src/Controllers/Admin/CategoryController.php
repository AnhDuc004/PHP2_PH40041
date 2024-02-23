<?php

namespace Ducan\Mvcoop\Controllers\Admin;

use Ducan\Mvcoop\Commons\Controller;
use Ducan\Mvcoop\Models\Category;

class CategoryController extends Controller
{
    private Category $category;

    private string $folder = 'categories.';

    public function __construct()
    {
        $this->category = new Category;
    }

    // Danh sách
    public function index()
    {
        $data['categories'] = $this->category->getAll();

        return $this->renderViewAdmin(
            $this->folder . __FUNCTION__,
            $data
        );
    }

    // Thêm mới
    public function create()
    {
        if (!empty($_POST)) {
            $this->category->insert($_POST['name']);

            header('Location: /admin/categories');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }

    // Xem chi tiết theo ID
    public function show($id)
    {
        $data['category'] = $this->category->getByID($id);

        if (empty($data['category'])) {
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
        $data['category'] = $this->category->getByID($id);

        if (empty($data['category'])) {
            die(404);
        }

        if (!empty($_POST)) {
            $this->category->update(
                $id,
                $_POST['name']
            );

            $_SESSION['success'] = 'Thao tác thành công!';

            header("Location: /admin/categories/$id/update");
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
        $this->category->deleteByID($id);

        header('Location: /admin/categories');
        exit();
    }
}
