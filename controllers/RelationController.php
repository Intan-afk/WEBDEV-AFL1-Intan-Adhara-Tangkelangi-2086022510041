<?php
require_once __DIR__ . '/../model/RelationModel.php';

class RelationController
{
    private RelationModel $model;

    public function __construct()
    {
        $this->model = new RelationModel();
    }

    public function index(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->save((int)($_POST['employee_id'] ?? 0), (int)($_POST['office_id'] ?? 0));
            header('Location: viewRelation.php');
            exit;
        }

        $relations = $this->model->all();
        $employees = $this->model->employees();
        $offices = $this->model->offices();
        $title = 'AFL-1 - Office Employees';
        require __DIR__ . '/../views/relation.php';
    }
}
