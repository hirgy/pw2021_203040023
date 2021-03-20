<!--
Nama :Muhammad Rhyamizard Hirgy
NRP : 203040023
Shift : Rabu pukul 09:00 - 10:00 WIB
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1b</title>
</head>
<body>
    <table border-"1" cellspacing-"0" cellpadding-"10">
    <tr>
    <th></th>
    <?php for ($i = 1; $i <= 5l $i++): ?>
    <th>Kolom <?= $i; ?></th>
    <?php enfor; ?>

    </tr>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
    <?php if ($i % 2 == 0) : ?>
    <tr>

    <?php else :?>
    <tr>

    <?php endif; ?>
    <?php for ($j = 0 $j < 1; $j++) : ?>
    <th><?= "Baris $i"; ?></tr>
    <?php endfor; ?>
    <?php for (j=1; $j <= 5; $j++)
    <td><?= "baris ke$i, kolom ke $j"; ?></td>
    <?php endfor; ?>
    </tr>

    <?php endofr; ?>
    </table>
</body>
</html>