<!DOCTYPE html>
<!--
TODO:
- Pagina's toevoegen
- Content home toevoegen
- DB spul?
-->
<html>
    <head>
        <title>Gastenboek - Wouter Brookhuis</title>
        <meta charset="UTF-8">
        <!-- Mobile phone 'support' -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-1.11.3.min.js"></script>
        <script src="menu.js"></script>
        <script src="header.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">
                <h1>Gastenboek</h1>
                <p>[TODO: Write bio]</p>
                <?php
                function portfolio_connect()
                {
                    $dbConnect = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, DATABASE_NAME, MYSQL_PORT);
                    if($dbConnect !== false)
                    {
                        $db = mysqli_select_db($dbConnect, DATABASE_NAME);
                        if($db === false)
                        {
                            echo "<p>Unable to connect to the database server.</p>";
                            echo "<p>" . mysqli_error($dbConnect) . "</p>";
                            mysqli_close($dbConnect);
                            $dbConnect = false;
                        }
                    }
                    else
                    {
                        echo "<p>Unable to connect to the database server.</p>";
                    }
                    return $dbConnect;
                }
                function portfolio_get_messages($ontvangerId)
                {
                    $link = portfolio_connect();
                    if($link)
                    {
                        
                    }
                    return null;
                }
                
                $msgs = portfolio_get_messages(2);
                foreach($msgs as $msg)
                {
                    
                }
                ?>
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
