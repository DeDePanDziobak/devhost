<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Dominik Treder">
    <meta name="description" content="Hostuj swoje pliki css/js juz dzis!">
    <meta name="keywords" content="hosting css, darmowy hosting css, darmowy, hosting, css, darmowy, hosting, js, darmowy hosting plikow, hosting, plikow">

    <title>DevHost! | EDYTOR</title>

    <link rel="stylesheet" href="style.css">

    <!--  Google Fonts Import  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <main>

        <article>
            <h1 class="header">edytor</h1>

            <form action="gotowe.php" method="post">
                <label for="textarea"></label>
                <textarea id="textarea" name="kod" class="textarea"></textarea> <br/>
                <button class="button" type="submit" id="przycisk" onclick="test_field()">wyślij kod 🦊!</button>
            </form>
        </article>

        <footer>
            <p class="footer-text">wszelkie prawa zastrzeżone &copy; <span class="bold">dev-host.pl</span></p>
        </footer>

    </main>


</body>
</html>