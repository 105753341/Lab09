<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>hi</header>

<body>
    <?php
    require_once "settings.php";

    $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);
    if ($dbconn) {
        $query = "SELECT*FROM cars";
        $result = mysqli_query($dbconn, $query);
        if ($result) {
            echo "<table>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p> Unable to connect to the database.<p>";
        }
    }
    ?>
</body>

</html>