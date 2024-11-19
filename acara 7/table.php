<!DOCTYPE html>
<html>
<body>
    <?php
    $data = array(
        array("Nama", "Umur", "Alamat"),
        array("Putra", 21, "Yogyakarta"),
        array("Tomi", 19, "India"),
        array("Wina", 25, "Spanyol"),
        array("Tyson", 18, "Amerika"),
        array("Mike", 27, "Paris"),
        array("Laura", 17, "London"),
        array("Smith", 16, "England"),
        array("Baden", 29, "Malaysia"),
        array("Ronaldo", 45, "Portugal")
    );

    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    foreach ($data as $baris) {
        echo "<tr>";
        foreach ($baris as $kolom) {
            echo "<td>" . $kolom . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>