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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
                <div id="kakusu">総画数：</div>

                <div class="resultLong">あなたのお名前は、とても響きがよく、見た目にも美しくバランスのとれた名前です。誰が見ても覚えやすく、呼びやすい印象を与えるため、人とのつながりを自然に広げてくれる力があります。その文字ひとつひとつにも親しみや品の良さが感じられ、あなた自身の穏やかさや信頼感を引き立てているように思えます。きっとこの名前が、あなたの魅力をより自然に伝える助けになっているはずです。</div>


            </div>






        </div>
    </main>

    <footer></footer>

    <script>
        window.inputName = <?= json_encode($name) ?>
    </script>
    <script src="js/main.js"></script>
</body>

</html>