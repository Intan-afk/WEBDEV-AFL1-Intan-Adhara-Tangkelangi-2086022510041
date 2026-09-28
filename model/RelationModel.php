<?php
require_once __DIR__ . '/EmployeeModel.php';
require_once __DIR__ . '/OfficeModel.php';

/** Relasi Employee -> Office (satu karyawan satu kantor), disimpan sebagai [employee_id => office_id]. */
class RelationModel
{
    private EmployeeModel $employees;
    private OfficeModel $offices;

    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->employees = new EmployeeModel();
        $this->offices = new OfficeModel();

        if (!isset($_SESSION['relations'])) {
            $_SESSION['relations'] = [1 => 1, 2 => 3, 3 => 1]; // Galib, Rama, Reynaldi
        }
    }

    public function employees(): array { return $this->employees->all(); }
    public function offices(): array   { return $this->offices->all(); }

    /** Daftar gabungan nama karyawan dan nama kantor. */
    public function all(): array
    {
        $rows = [];
        foreach ($this->employees->all() as $emp) {
            $officeId = $_SESSION['relations'][$emp['id']] ?? null;
            $office = $officeId ? $this->offices->find((int)$officeId) : null;
            if ($office) {
                $rows[] = ['employee' => $emp['nama'], 'office' => $office['nama']];
            }
        }
        return $rows;
    }

    public function save(int $employeeId, int $officeId): bool
    {
        if (!$this->employees->find($employeeId) || !$this->offices->find($officeId)) {
            return false;
        }
        $_SESSION['relations'][$employeeId] = $officeId;
        return true;
    }

    public function removeEmployee(int $employeeId): void
    {
        unset($_SESSION['relations'][$employeeId]);
    }
}
