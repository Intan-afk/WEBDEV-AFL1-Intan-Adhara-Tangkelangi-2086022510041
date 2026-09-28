<?php require __DIR__ . '/header.php'; ?>
<h3>List Karyawan</h3>
<table class="dark">
    <thead>
        <tr><th>No</th><th>Nama</th><th>Jabatan</th><th>Usia</th><th>Delete</th></tr>
    </thead>
    <tbody>
    <?php foreach (($employees ?? []) as $i => $emp): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= e($emp['nama']) ?></td>
            <td><?= e($emp['jabatan']) ?></td>
            <td><?= e($emp['usia']) ?></td>
            <td><a class="link" href="viewEmployee.php?action=delete&id=<?= (int)$emp['id'] ?>"
                   onclick="return confirm('Hapus karyawan ini?')">Delete</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h3>Tambah Karyawan</h3>
<form method="post" action="viewEmployee.php" class="stack">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" required>

    <label for="jabatan">Jabatan</label>
    <input type="text" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" required>

    <label for="usia">Usia</label>
    <input type="number" id="usia" name="usia" placeholder="Masukkan Usia" min="1" required>

    <button type="submit" class="btn-blue">Submit</button>
</form>
<?php require __DIR__ . '/footer.php'; ?>
