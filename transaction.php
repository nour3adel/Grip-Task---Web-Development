<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <!-- .................STYLE CSS................... -->

    <link rel="stylesheet" href="css/style.css">


    <!-- .................Trancaction CSS................... -->


    <link rel="stylesheet" href="css/transaction.css?v=<?php echo time(); ?>">



    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

</head>

<body>

    <!-------------------- Header ----------------------->

    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
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

    <!-------------------- Header ----------------------->



    <!-- -----------------------TRANSACTION SECTION ------------------- -->

    <div class="Transaction">
        <h2>Transaction History </h2>
        <?php
              include "connect.php";

              $conn = mysqli_connect($servername, $username, $password, $dbname);

                $sql = "SELECT * FROM transaction_history";
                $result = $conn->query($sql);
                 
                echo "<table>";
                        echo "<tr>";
                        echo "<th>Trans.ID</th>";
                        echo "<th>Sender Name</th>";
                        echo "<th>Receiver Name</th>";
                        echo "<th>Amount ($)</th>";
                        echo "<th>Date</th>";
                        echo "</tr>";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["SNo"] . "</td><td>" . $row["Sender_Name"] . "</td><td>" . $row["Receiver_Name"] . "</td><td>" . $row["Amount"] . "</td><td>" . $row["Date"] . "</td></tr>";    
                    }
                echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>

    </div>

    <!-- -----------------------TRANSACTION SECTION ------------------- -->

    <!-- ----------------------FOOTER SECTION --------------------- -->

    <footer class="footer">
        <p class="footer-title">
            copyrights @
            <span> Nour Adel </span>
        </p>


    </footer>

    <!-- -----------------------END FOOTER SECTION -------------------- -->


    <!--.................Main JS ................. -->

    <script src="./Js/Main.js"></script>

</body>

</html>