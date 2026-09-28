<?php require __DIR__ . '/header.php'; ?>
<h2 class="blue-title">Office Employees</h2>
<table class="light">
    <thead>
        <tr><th>Employee</th><th>Office</th></tr>
    </thead>
    <tbody>
    <?php foreach (($relations ?? []) as $r): ?>
        <tr>
            <td><?= e($r['employee']) ?></td>
            <td><?= e($r['office']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<form method="post" action="viewRelation.php" class="relform">
    <table class="formtable">
        <tr>
            <td><label for="employee_id">Employee</label></td>
            <td>
                <select id="employee_id" name="employee_id">
                    <?php foreach (($employees ?? []) as $emp): ?>
                        <option value="<?= (int)$emp['id'] ?>"><?= e($emp['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="office_id">Office</label></td>
            <td>
                <select id="office_id" name="office_id">
                    <?php foreach (($offices ?? []) as $o): ?>
                        <option value="<?= (int)$o['id'] ?>"><?= e($o['nama']) ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit" class="btn-save">SAVE</button>
</form>
<?php require __DIR__ . '/footer.php'; ?>
