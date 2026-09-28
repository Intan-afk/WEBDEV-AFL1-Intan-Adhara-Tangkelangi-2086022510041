<?php
require_once __DIR__ . '/BaseModel.php';

class EmployeeModel extends BaseModel
{
    protected string $key = 'employees';
    protected array $seed = [
        1 => ['id' => 1, 'nama' => 'Galib',    'jabatan' => 'Admin',       'usia' => 20],
        2 => ['id' => 2, 'nama' => 'Rama',     'jabatan' => 'Super Admin', 'usia' => 19],
        3 => ['id' => 3, 'nama' => 'Reynaldi', 'jabatan' => 'Admin',       'usia' => 21],
    ];
}
