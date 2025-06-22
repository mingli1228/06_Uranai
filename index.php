<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style></style>
    <title>姓名占い</title>
</head>

<body>
    <header>
        <h1>姓名占い</h1>
        <div class="description">あなたのお名前を占います🔮</div>
    </header>
    <main>
        <div class="introduction">
            <ul>
                <li>あなたの名前を入力してください。<br>
                    例：⭕️山田太郎　✖️山田　太郎
                </li>
                <li>
                    <form action="result.php" method="POST">
                        <input type="text" name="name">
                        <button id="letsGo">占う！</button>
                    </form>
                </li>
            </ul>
        </div>

    </main>

    <footer></footer>
</body>

</html>