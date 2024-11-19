<!DOCTYPE html>
<html>
<body>
    <?php
    $umur = 21;

    if ($umur < 21) {
        echo "Anda masih di bawah umur.";
    } elseif ($umur == 21) {
        echo "Selamat, Anda baru saja berusia 21 tahun!";
    } else {
        echo "Anda sudah dewasa.";
    }
    ?>
</body>
</html>