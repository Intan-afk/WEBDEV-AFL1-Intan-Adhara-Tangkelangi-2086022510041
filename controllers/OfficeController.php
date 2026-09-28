<?php
require_once __DIR__ . '/../model/OfficeModel.php';

class OfficeController
{
    private OfficeModel $model;

    public function __construct()
    {
        $this->model = new OfficeModel();
    }

    public function index(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = trim($_POST['nama'] ?? '');
            $alamat = trim($_POST['alamat'] ?? '');
            $kota = trim($_POST['kota'] ?? '');
            $telepon = trim($_POST['telepon'] ?? '');
            if ($nama !== '' && $alamat !== '' && $kota !== '' && $telepon !== '') {
                $this->model->add(compact('nama', 'alamat', 'kota', 'telepon'));
            }
            header('Location: viewOffice.php');
            exit;
        }

        $offices = $this->model->all();
        $title = 'AFL-1 - Office';
        require __DIR__ . '/../views/office.php';
    }
}
