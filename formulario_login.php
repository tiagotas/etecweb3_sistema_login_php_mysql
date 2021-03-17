<html>
    <head>

    </head>
    <body>
        <fieldset>
            <legend>Login</legend>

            <?php if(isset($_GET['falhou'])): ?>
            <div>Login Falhou: email ou senha incorretos.
            <?php endif ?>


            <form action="autenticar.php" method="post">
                <label>
                    Email: 
                    <input name="email" type="email" />
                </label>
                <label>
                    Senha:
                    <input type="password" name="senha" />
                </label>
                <button type="submit">Enviar</button>
            </form>
        </fieldset>
    </body>
</html>