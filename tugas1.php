<!DOCTYPE html>
<html>
<head>
    <title>23753098</title>
</head>
<body>

<form method="POST">
    Masukkan Diameter: <input type="text" name="diameter">
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
function hitungLuasSetengahLingkaran($diameter) {
    $jariJari = $diameter / 2;
    $luas = 3.14 * $jariJari * $jariJari / 2;
    return $luas;
}

if (isset($_POST['submit'])) {
    $diameter = $_POST['diameter'];
    $luas = hitungLuasSetengahLingkaran($diameter);
    echo "<b>Hasil: $luas </b>";
}
?>

</body>
</html>