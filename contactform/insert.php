<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=PHPlesson;host=localhost;","root","root");

$pdo->exec("insert into contactform(namae,mail,age,comments)
values('".$_POST['namae']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype HTML>
<html lang="ja">

<head>
    <mata charset = "utf-8">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet"type="text/css" href="style2.css">
</head>

<body>

    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
</body>
</html>
