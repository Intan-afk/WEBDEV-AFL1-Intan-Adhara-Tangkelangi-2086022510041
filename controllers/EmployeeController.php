<?php
require_once __DIR__ . '/../model/EmployeeModel.php';
require_once __DIR__ . '/../model/RelationModel.php';

class EmployeeController
{
    private EmployeeModel $model;

    public function __construct()
    {
        $this->model = new EmployeeModel();
    }

    public function index(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = trim($_POST['nama'] ?? '');
            $jabatan = trim($_POST['jabatan'] ?? '');
            $usia = (int)($_POST['usia'] ?? 0);
            if ($nama !== '' && $jabatan !== '' && $usia > 0) {
                $this->model->add(['nama' => $nama, 'jabatan' => $jabatan, 'usia' => $usia]);
            }
            $this->redirect();
        }

        if (($_GET['action'] ?? '') === 'delete' && isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $this->model->delete($id);
            (new RelationModel())->removeEmployee($id);
            $this->redirect();
        }

        $employees = $this->model->all();
        $title = 'AFL-1 - Employee';
        require __DIR__ . '/../views/employee.php';
    }

    private function redirect(): void
    {
        header('Location: viewEmployee.php');
        exit;
    }
}
