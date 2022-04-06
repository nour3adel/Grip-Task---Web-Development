<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <!-- .................Trancaction CSS................... -->


    <link rel="stylesheet" href="css/transaction.css?v=<?php echo time(); ?>">



    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

</head>

<body>

    <! ---------------------------Header---------------------------->
        <header>
            <a href="#" class="logo"> Local <span class="SubLogo"> Bank </span> </a>

            <nav class="navigation">
                <a href="index.html">Home</a>
                <a href="Services.html">Services</a>
                <a href="index.html">Contact</a>
            </nav>
        </header>


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