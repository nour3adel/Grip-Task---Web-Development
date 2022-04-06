<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Bank</title>

    <link rel="stylesheet" href="css/transfer.css">
    <link rel="stylesheet" href="css/main.css">


    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
</head>

<body>
    <!--Header-->
    <header>
        <a href="#" class="logo"> Local <span class="h"> Bank</span> </a>
        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="Services.html">Services</a>
            <a href="index.html">Contact</a>
        </nav>
    </header>




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





</body>

</html>