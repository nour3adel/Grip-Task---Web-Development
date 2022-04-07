<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <!-- ................. STYLE CSS ................... -->

    <link rel="stylesheet" href="css/style.css">

    <!-- ................. Users CSS ................... -->

    <link rel="stylesheet" href="css/users.css?v=<?php echo time(); ?>">

    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

</head>

<body>

    <!------------------- Header ------------------->

    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="index.html">
                        <h1>Local <span>Bank</span></h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <div class="navigation">
                        <ul>
                            <li><a href="index.html" data-after="Home">
                                    <h1>Home</h1>
                                </a></li>
                            <li><a href="Services.html" data-after="Service">
                                    <h1>Services</h1>
                                </a></li>
                            <li><a href="#contact" data-after="Contact">
                                    <h1>Contact</h1>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------- End Header ----------------------------->

    <!------------------- ALL USERS SECTION ------------------->

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
    <!------------------- END ALL USERS SECTION ------------------->


    <!-- ----------------FOOTER SECTION ---------------- -->

    <footer class="footer">
        <p class="footer-title">
            copyrights @
            <span> Nour Adel </span>
        </p>

    </footer>

    <!-- ----------------END FOOTER SECTION ------------ -->

    <!--.................Main JS ................. -->

    <script src="./Js/Main.js"></script>




</body>

</html>