<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <!-- ................. Users CSS ................... -->


    <link rel="stylesheet" href="css/users.css?v=<?php echo time(); ?>">

    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

</head>

<body>

    <!-----------------------Header------------------------->
    <header class="userHeader">

        <a href="#" class="logo"> Local <span class="SubLogo"> Bank</span> </a>

        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="Services.html">Services</a>
            <a href="index.html">Contact</a>
        </nav>
    </header>
    <!-- ------------------ END HEADER ----------------- -->

    <div class="Users">
        <h2> Bank Customers </h2>
        <?php

        include "connect.php";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM all_users";
        $result = $conn->query($sql);

        echo "<table>";
        echo "<tr>";
        echo "<th>User ID</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Balance ($)</th>";
        echo "</tr>";


        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["USER_ID"] . "</td><td>" . $row["NAME"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Balance"] . "</td></tr><br>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();

        ?>

    </div>


    <!-- ----------------FOOTER SECTION ---------------- -->

    <footer class="footer">
        <p class="footer-title">
            copyrights @
            <span> Nour Adel </span>
        </p>

    </footer>

    <!-- ----------------END FOOTER SECTION ------------ -->





</body>

</html>