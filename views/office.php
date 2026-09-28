<?php require __DIR__ . '/header.php'; ?>
<h3>List Kantor</h3>
<div class="scroll">
<table class="dark">
    <thead>
        <tr><th>No</th><th>Nama Kantor</th><th>Alamat</th><th>Kota</th><th>Telepon</th></tr>
    </thead>
    <tbody>
    <?php foreach (($offices ?? []) as $i => $o): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= e($o['nama']) ?></td>
            <td><?= e($o['alamat']) ?></td>
            <td><?= e($o['kota']) ?></td>
            <td><?= e($o['telepon']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>

<h3>Tambah Kantor</h3>
<form method="post" action="viewOffice.php" class="stack">
    <label for="nama">Nama Kantor</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Kantor" required>

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" required>

    <label for="kota">Kota</label>
    <input type="text" id="kota" name="kota" placeholder="Masukkan Kota" required>

    <label for="telepon">Telepon</label>
    <input type="text" id="telepon" name="telepon" placeholder="Masukkan Telepon" required>

    <button type="submit" class="btn-blue">Submit</button>
</form>
<?php require __DIR__ . '/footer.php'; ?>
