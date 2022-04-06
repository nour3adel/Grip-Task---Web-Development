<IDOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.e">
        <title>Local Bank</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/newUser.css">
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
                <a href="#contact">Contact</a>
            </nav>
        </header>

        <div class="transfer">
            <div class="container">
                <h2>Registration Form</h2>
            </div>

            <form action="newUser_process.php" method="POST">
               
                <label for="NAME">Name: </label><br>
                <input type='text' name='NAME' id="NAME" required /> <br> <br>
                <label for="Email">Email: </label> <br>
                <input type='varchar(30)' name='Email' id="Email" required /> <br> <br>
                <label for="Balance"> Balance: </label> <br>
                <input type='int(11)' name='Balance' id="Balance" required /> <br> <br>
                <input type='submit' name='submit' id="submit" />
            </form>
        </div>
        </div>




    </body>

    </html>