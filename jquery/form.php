<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>

    <form method="POST" action="">
        Nama Pengguna : <input type="text" name="nama"><br>
        <input type="submit" name="input" value="input">
    </form>

</body>
</html>

<?php

if (isset($_POST['input'])) {
    $nama = $_POST ['nama'];
}

?>