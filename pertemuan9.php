<!DOCTYPE html>
<html>
<head>
    <title>Tanggal</title>
</head>
<body>
    <h1>
        <?php
        date_default_timezone_set('Asia/Jakarta');

        echo "Sekarang tanggal ";
        echo date('d-F-Y');
        echo "<br>dan jam ";
        echo date('h:i:s A');
        ?>
    </h1>
</body>
</html>