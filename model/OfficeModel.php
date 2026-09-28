<?php
require_once __DIR__ . '/BaseModel.php';

class OfficeModel extends BaseModel
{
    protected string $key = 'offices';
    protected array $seed = [
        1 => ['id' => 1, 'nama' => 'UC Surabaya', 'alamat' => 'CitraLand CBD Boulevard',
              'kota' => 'Surabaya', 'telepon' => '031-7451699'],
        2 => ['id' => 2, 'nama' => 'UC Jakarta', 'alamat' => 'kawasan superblok Ciputra International',
              'kota' => 'Jakarta', 'telepon' => '021-39710555'],
        3 => ['id' => 3, 'nama' => 'UC Makassar', 'alamat' => 'CitraLand City CPI',
              'kota' => 'Makassar', 'telepon' => '0811-2500-228'],
    ];
}
