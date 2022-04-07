<IDOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.e">
    <title>Local Bank</title>


    <!----- ------------------STYLE CSS --------------------- -->

    <link rel="stylesheet" href="css/style.css">

    <!----------------------NEWUSER CSS --------------------- -->

    <link rel="stylesheet" href="css/newUser.css">


    <!--.................Website Favicon ................. -->

    <link rel="shortcut icon" type="image/jpg" href="images/favicon.png" />
  </head>

  <body>
    <!------------------------ Header -------------------->

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
    <!-------------------------------- End Header ------------------------->



    <!-------------------------------- REGISTRATION SECTION ------------------------->


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

    <!------------------------------END REGISTRATION SECTION ------------------------->



    <!--.................Main JS ................. -->

    <script src="./Js/Main.js"></script>


  </body>

  </html>