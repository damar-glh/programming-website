<html>

<head>
    <title>Login Toko Baju</title>
</head>

<body>
    <div class="login" style="text-align: center;">
        <h1>ADMIN PANEL TOKO BAJU</h1>
        <form action="verifikasi_login.php" method="post">
            <fieldset>
                <legend>Login Admin</legend>
                <p>
                    <label for="username">Username: </label>
                    <input type="text" name="username">
                </p>
                <p>
                    <label for="password">Password: </label>
                    <input type="password" name="password">
                </p>
                <p>
                    <input type="submit" name="login" value="login">
                </p>
            </fieldset>
        </form>
    </div>
</body>

</html>