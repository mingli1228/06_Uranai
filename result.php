<?php
$name = $_POST["name"];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
    <style></style>
    <title>姓名占い(結果)

    </title>
</head>

<body>
    <header>
        <h1>姓名占い(結果)

        </h1>
        <div class="description">あなたのお名前を占います🔮</div>
    </header>
    <main>
        <div class="introduction"></div>

        <div id="resultBox">
            <div id="left"><?= $name ?></div>
            <div id="right">
                <h2><?= $name ?>さんの占い結果</h2>
                <div class="kakusu">画数</div>
            </div>






        </div>
    </main>

    <footer></footer>

    <script src="js/main.js"></script>
</body>

</html>