<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC PHP</title>
</head>
<body>
    <header>
        <h1>MVC PHP</h1>
        <a href="index.php/stranky/default/">Domů</a>
        <a href="index.php/uzivatele/registrovat/">Registrace</a>
        <a href="index.php/uzivatele/prihlasit/">Přihlášení</a>
    </header>
    <main>
        <?php require_once "router.php"; ?>
    </main>
    <footer>
        <p>&copy; 2020 Jakub Šenkýř</p>
    </footer>
</body>
</html>
