<?

    $dbname = 'cx92708_db';
    $dbuser = 'cx92708_db';
    $dbpass = 'cx92708_db$$$';


    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC');

    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>Список заявок</title>
            <style>
                table {
                    border: 1px solid black;
                    border-collapse: collapse;
                }

                th {
                    background-color: lightblue;
                }
                
                th, td {
                    border: 1px solid grey;
                    padding: 5px;
                }

            </style>
        </head>
        <body>
        <table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Телефон</th>
        <th>Email</th>
    </tr>
    <?
    foreach ($stmt as $row) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>

    