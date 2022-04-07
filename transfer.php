<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <!-- .................STYLE CSS................... -->

    <link rel="stylesheet" href="css/style.css">


    <!-- .................Transfer CSS................... -->


    <link rel="stylesheet" href="css/transfer.css">



    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />

</head>

<body>

    <!-------------------------- Header ------------------------>

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
    <!--------------------------END Header ------------------------>



    <!-------------------------- TRANSFER SECTION ------------------------>


    <div class="transfer">

        <div class="container">


            <h2>Transfer Money</h2><br>

            <form action="transfer_process.php" method="POST">

                <div class="select" id="form"><label>
                        <h1>Sender Name:</h1>
                    </label>
                    <select name="sender" id="sender" required>
                        <option selected disabled>Select </option>
                        <?php
                         include "connect.php";
                        $Sender_Name = $_POST['sender'];
                        $db = mysqli_connect($servername,$username,$password ,$dbname);
                        $res = mysqli_query($db, "SELECT * FROM all_users ");
                        while ($row = mysqli_fetch_array($res)) {
                            echo ("<option> " . "  " . $row['NAME'] . "</option>");
                        }
                        ?>
                    </select><br><br>
                    <label>
                        <h1>Receiver Name:</h1>
                    </label>
                    <select name="receiver" id="receiver" required>
                        <option selected disabled>Select </option>
                        <?php
                          include "connect.php";
                        $db =mysqli_connect($servername,$username,$password ,$dbname);
                        $res = mysqli_query($db, "SELECT * FROM all_users");
                        while ($row = mysqli_fetch_array($res)) {
                            echo ("<option> " . "  " . $row['NAME'] . "</option>");
                        }
                        ?>
                    </select>
                    <br> <br>

                    <label>
                        <h1>Enter Amount: </h1><input type="text" name="amount" required>
                    </label><br><br>
                    <button>Proceed</button>
                </div>
            </form>


        </div>
    </div>

    <!--------------------------END TRANSFER SECTION ------------------------>

    <!--.................Main JS ................. -->

    <script src="./Js/Main.js"></script>


</body>

</html>