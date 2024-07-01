<!-- ./includes/loginForm.php -->
<?php
    $title = "Login con PHP";
?>
<h1>Iniciar Sesión</h1>
    <main>
        <form action="./scripts/login/login.php" method="post">
            <label for="username">Nombre de usuario:</label> <br>
            <input type="text" id="username" name="username" required autocomplete="off"><br><br>
            <label for="password">Contraseña:</label> <br>
            <input type="password" id="password" name="password" required autocomplete="off"><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </main>