<?php
session_start();
?>
<html>
<head>
    <title>Результат загрузки файла</title>
</head>
<body>
<?php
define("UPLOADS_DIR", "files/");
if ($_FILES["filename"]["size"] > 1024 * 5 * 1024) {
    echo("Размер файла превышает пять мегабайт");
    exit;
}
if ($_FILES['filename']['type'] !== 'application/pdf') {
    echo("Файл не является pdf");
    exit;
}
if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
    $name = basename($_FILES["filename"]["name"]);
    $tmpName = $_FILES["filename"]["tmp_name"];
    move_uploaded_file($tmpName, UPLOADS_DIR . $name);
    echo("Файл успешно загружен");
} else {
    echo("Ошибка при загрузке файла");
}
session_destroy();
?>
</body>
</html>