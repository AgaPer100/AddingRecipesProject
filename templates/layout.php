<html lang="pl">

    <head>
        <title>Moje przepisy</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="/public/style.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="header">
                <h1><i class="far fa-clipboard"></i>Moje przepisy</h11>
            </div>
        
            <div class="container">
                <div class="menu">
                    <ul>
                        <li><a href="/">Strona główna</a></li>
                        <li><a href="/?action=create">Nowy przepis</a></li>
                    </ul>
                </div>

                <div class="page">
                    <?php require_once("templates/pages/$page.php"); ?>
                </div>
            </div>

            <div class="footer">
                <p>Moja książka z przepisami</p>
            </div>
        </div>
    </body>

</html>