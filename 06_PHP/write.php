<?php

//inputから受け取る
$name = $_POST['name'];
$birthPlace = $_POST['birthPlace'];
//データを整形する
$data = $name.$birthPlace."\n"; // \nはbrみたいな改行
//データを保存する
file_put_contents('data/data.txt',$data,FILE_APPEND);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>課題</title>
</head>

<body>

    <h1>完了しました！</h1>
    <h2>確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
