<html>

<head>
    <title>Login | RuangSeminar Shortener</title>
    <link rel="stylesheet" href="<?= ($base) ?>assets/css/login.css">
</head>

<body>
    <div id="container">
        <form action="<?= ($base) ?>login" method="POST">
            <h1 class="title">Login</h1>
            <p class="description">Masukin Username dan Password</p>
            <input class="loginInput" placeholder="Username" name="username" />
            <input class="loginInput" placeholder="Password" type="Password" name="password" />
            <div id="footer">
                <input type="submit" id="anim">
                <label id="circle" for="anim">Login</label>
            </div>
        </form>
    </div>
</body>

</html>