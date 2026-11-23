<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator PHP</title>
</head>
<body>
    <?php
    $angka1 = $_POST['angka1'] ?? '';
    $angka2 = $_POST['angka2'] ?? '';
    $operator = $_POST['operator'] ?? '+';
    $hasil = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($angka1 === '' || $angka2 === '') {
            $pesan = 'Masukkan kedua angka!';
        } elseif (!is_numeric($angka1) || !is_numeric($angka2)) {
            $pesan = 'Input harus berupa angka!';
        } else {
            $angka1 = (float) $angka1;
            $angka2 = (float) $angka2;

            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 == 0) {
                        $pesan = 'Tidak bisa dibagi dengan nol!';
                    } else {
                        $hasil = $angka1 / $angka2;
                    }
                    break;
                default:
                    $pesan = 'Operator tidak valid!';
            }
        }
    }
    ?>

    <h1>Kalkulator Sederhana</h1>

    <form method="POST">
        <input type="number" name="angka1" step="any" value="<?= htmlspecialchars((string) $angka1) ?>" required>

        <select name="operator">
            <option value="+" <?= $operator === '+' ? 'selected' : '' ?>>+</option>
            <option value="-" <?= $operator === '-' ? 'selected' : '' ?>>-</option>
            <option value="*" <?= $operator === '*' ? 'selected' : '' ?>>×</option>
            <option value="/" <?= $operator === '/' ? 'selected' : '' ?>>÷</option>
        </select>

        <input type="number" name="angka2" step="any" value="<?= htmlspecialchars((string) $angka2) ?>" required>

        <button type="submit">Hitung</button>
    </form>

    <?php if (isset($pesan)): ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php elseif ($hasil !== null): ?>
        <p>Hasil: <?= htmlspecialchars((string) $hasil) ?></p>
    <?php endif; ?>
</body>
</html>
