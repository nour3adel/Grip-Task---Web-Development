<!doctype html>
<html lang="en">

<head>
    <title>Responsive Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="table.css">


</head>

<body>
    <section class="bg-light p-5">
        <h3 class="pb-2">Responsive Table</h3>
        <div class="table-responsive" id="no-more-tables">
            <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>USER ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>BALANCE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "nour_bank";

                    // Create connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
                    // read all row from database table
                    $sql = "SELECT * FROM all_users";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalid query: " . $connection->error);
                    }
                    // read data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                        echo "<tr>
                      
                <td >" . $row[ "USER_ID"] . "</td>
                <td>" . $row["NAME"] . "</td>
                <td>" . $row["Email"] . "</td>
                <td>" . $row["Balance"] . "</td>
               
                </tr>";

              
                    }


                    ?>
                     
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>