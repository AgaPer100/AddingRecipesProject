<html>
    <head>
    </head>
    <body>
        <div class="header">
            <h1>Moje przepisy</h11>
        </div>
        
        <div class="container">
            <div class="menu">
                <ul>
                    <li>
                        <a href="/">Lista przepisów</a>
                    </li>
                    <li>
                        <a href="/?action=create">Nowy przepis</a>
                    </li>
                </ul>
            </div>
            <div>
            <?php
                if($page === 'create'){
                    include_once("templates/pages/create.php");
                } else{
                    include_once("templates/pages/list.php");
                }
            ?>
            </div>
        </div>

        <div class="footer">
            STOPKA
        </div>
    </body>
</html>