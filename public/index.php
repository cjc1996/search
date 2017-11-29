<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $server = 'v.je';
        $username = 'student';
        $password = 'student';
        $schema = 'csy2028';

        $pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $results = $pdo->query('SELECT * FROM person');
    ?>
    <header>Header</header>
    <nav>Nav</nav>
    <main>
        <?php 
            foreach($results as $row) 
            {
                echo '<ul>';
                echo '<li>' . $row['forename'] . '</li>';
                echo '</ul>';
            }
        ?>
    </main>
    <footer>Footer</footer>
</body>
</html>